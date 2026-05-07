<?php



/**

 *

 */



class Home_public extends MX_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->load->model("Home_public_mod");
        $this->load->model("Tag_mod");

    }

    public function index($value = "")

    { 

        $data["allBrands"] = $this->db

            ->select("id,name")

            ->get("cr_brands")

            ->result();

        $data["service_category"] = $this->Home_public_mod->get_service_category();

        $data["tags"] = $this->Tag_mod->get_page_tags('home_index');
        $this->load->view("home/index", $data);

    }



    public function getModelByBrandId($value = "")

    {

        try {

            $id = $this->input->post("id");



            $data = $this->db

                ->select("id, name")

                ->where("brand_id", $id)

                ->get("cr_models")

                ->result();



            if ($data) {

                return $this->output

                    ->set_status_header(Http::OK)



                    ->set_content_type("application/json")



                    ->set_output(

                        json_encode([

                            "status" => Http::OK,



                            "message" => "Data found",



                            "data" => $data,

                        ])

                    );

            } else {

                return $this->output

                    ->set_status_header(Http::BAD_REQUEST)



                    ->set_content_type("application/json")



                    ->set_output(

                        json_encode([

                            "status" => Http::BAD_REQUEST,



                            "message" => "Data not found",



                            "data" => [],

                        ])

                    );

            }

        } catch (Exception $e) {

            return $this->output

                ->set_status_header(Http::BAD_REQUEST)



                ->set_content_type("application/json")



                ->set_output(

                    json_encode([

                        "status" => Http::BAD_REQUEST,



                        "message" => $e,

                    ])

                );

        }

    }



    public function sendOtp($value = "")

    {

        try {

            $post = $this->input->post();



            $otp = generate_otp();



            $mobile = $post["phone_number"];



            // send sms.......



            sendSms($mobile, $otp);



            $this->db



                ->where("mobile", $mobile)



                ->delete("cr_otp");



            $this->db->insert("cr_otp", [

                "mobile" => $mobile,



                "verification_token" => bcrypt($otp),



                "verification_token_created_at" => date("Y-m-d H:i:s"),

            ]);



            return $this->output

                ->set_status_header(Http::OK)



                ->set_content_type("application/json")



                ->set_output(

                    json_encode([

                        "status" => Http::OK,



                        "message" => "OTP sent successfully",

                    ])

                );

        } catch (Exception $e) {

            return $this->output

                ->set_status_header(Http::BAD_REQUEST)



                ->set_content_type("application/json")



                ->set_output(

                    json_encode([

                        "status" => Http::BAD_REQUEST,



                        "message" => $e,

                    ])

                );

        }

    }



    public function saveContactForm($value = "")

    {

        try {

            if ($post = $this->input->post()) {

                $brand_id = isset($post["brand_id"]) ? trim($post["brand_id"]) : "";
                $brand_name = !empty($brand_id) ? $this->brandNameById($brand_id) : "";

                $modal_id = isset($post["modal_id"]) ? trim($post["modal_id"]) : "";
                $modal_name = !empty($modal_id) ? $this->modalNameById($modal_id) : "";

                $petrol_type = isset($post["petrol_type"]) ? trim($post["petrol_type"]) : "";
                $full_name = isset($post["full_name"]) ? trim($post["full_name"]) : "";
                $mobile = isset($post["phone_number"]) ? trim($post["phone_number"]) : "";
                $message = isset($post["message"]) ? trim($post["message"]) : "";
                $service = isset($post["service"]) ? trim($post["service"]) : "";
                $service_id_input = isset($post["service_id"]) ? trim($post["service_id"]) : "";
                $otp = isset($post["otp"]) ? trim($post["otp"]) : "";

                if ($mobile === "" || $full_name === "" || $service === "" || $otp === "") {
                    return $this->output
                        ->set_status_header(Http::BAD_REQUEST)
                        ->set_content_type("application/json")
                        ->set_output(json_encode([
                            "status" => Http::BAD_REQUEST,
                            "message" => "Missing required fields"
                        ]));
                }

                // OTP BYPASS: If OTP is 'bypass', skip verification
                $otp_valid = false;
                if ($otp === 'bypass') {
                    $otp_valid = true; // Bypass OTP verification
                } else {
                    // Original OTP verification process
                    $otpUser = $this->db

                        ->select("verification_token")

                        ->where("mobile", $mobile)

                        ->get("cr_otp")

                        ->row();

                    if ($otpUser) {
                        $verification_token = $otpUser->verification_token;
                        $otp_valid = verify_hash($otp, $verification_token);
                    }
                }

                if ($otp_valid) {
                    // Resolve service id from service name/service id payload
                    $service_id = $this->resolveServiceId($service, $service_id_input);

                    if (!$service_id) {
                        log_message('error', 'Service not found for: ' . $service);
                        return $this->output
                            ->set_status_header(Http::BAD_REQUEST)
                            ->set_content_type("application/json")
                            ->set_output(json_encode([
                                "status" => Http::BAD_REQUEST,
                                "message" => "Service not found"
                            ]));
                    }

                    // Create order in cr_order table
                    $order_data = [
                        'mobile' => $mobile,
                        'brand_id' => $brand_id !== "" ? $brand_id : null,
                        'modal_id' => $modal_id !== "" ? $modal_id : null,
                        'petrol_type' => $petrol_type,
                        'full_name' => $full_name,
                        'message' => $message,
                        'status' => 1
                    ];

                    $this->db->insert('cr_order', $order_data);
                    $order_id = $this->db->insert_id();

                    if (!$order_id) {
                        log_message('error', 'Failed to insert order: ' . $this->db->error()['message']);
                        return $this->output
                            ->set_status_header(Http::BAD_REQUEST)
                            ->set_content_type("application/json")
                            ->set_output(json_encode([
                                "status" => Http::BAD_REQUEST,
                                "message" => "Failed to create order"
                            ]));
                    }

                    // Create order details in cr_order_details table
                    $order_details = [
                        'order_id' => $order_id,
                        'service_id' => $service_id,
                        'status' => 1
                    ];
                    $this->db->insert('cr_order_details', $order_details);
                    if (!$this->db->affected_rows()) {
                        log_message('error', 'Failed to insert order details: ' . $this->db->error()['message']);
                        return $this->output
                            ->set_status_header(Http::BAD_REQUEST)
                            ->set_content_type("application/json")
                            ->set_output(json_encode([
                                "status" => Http::BAD_REQUEST,
                                "message" => "Failed to create order details"
                            ]));
                    }

                    // Try to send email, but don't fail if it doesn't work
                    try {
                        $mailMessage = $this->getMailMessage(
                            $brand_name,
                            $modal_name,
                            $full_name,
                            $mobile,
                            $service,
                            $message
                        );
                        $subject = "Let's Connect";
                        sendMail($subject,$mailMessage);
                    } catch (Exception $e) {
                        // Log email error but continue
                        log_message('error', 'Email send failed: ' . $e->getMessage());
                    }

                    return $this->output
                        ->set_status_header(Http::OK)
                        ->set_content_type("application/json")
                        ->set_output(json_encode([
                            "status" => Http::OK,
                            "message" => "Your request submitted successfully"
                        ]));

                } else {

                    return $this->output

                        ->set_status_header(Http::BAD_REQUEST)



                        ->set_content_type("application/json")



                        ->set_output(

                            json_encode([

                                "status" => Http::BAD_REQUEST,



                                "message" => "Invalid otp",

                            ])

                        );

                }

            } else {

                return $this->output

                    ->set_status_header(Http::BAD_REQUEST)



                    ->set_content_type("application/json")



                    ->set_output(

                        json_encode([

                            "status" => Http::BAD_REQUEST,



                            "message" => "Invalid request",

                        ])

                    );

            }

        } catch (Exception $e) {

            return $this->output

                ->set_status_header(Http::BAD_REQUEST)



                ->set_content_type("application/json")



                ->set_output(

                    json_encode([

                        "status" => Http::BAD_REQUEST,



                        "message" => $e->getMessage(),

                    ])

                );

        }

    }

    private function resolveServiceId($service_name = "", $service_id = "")
    {
        if (!empty($service_id) && ctype_digit((string)$service_id)) {
            $service_row = $this->db
                ->select('id')
                ->where('id', (int)$service_id)
                ->get('cr_services')
                ->row();
            if ($service_row) {
                return (int)$service_row->id;
            }
        }

        if ($service_name === "") {
            return null;
        }

        $service_row = $this->db
            ->select('id')
            ->group_start()
                ->where('cate_name', $service_name)
                ->or_where('tittle', $service_name)
                ->or_where('inner_title', $service_name)
            ->group_end()
            ->get('cr_services')
            ->row();

        if ($service_row) {
            return (int)$service_row->id;
        }

        $service_row = $this->db
            ->select('id')
            ->group_start()
                ->like('cate_name', $service_name)
                ->or_like('tittle', $service_name)
                ->or_like('inner_title', $service_name)
            ->group_end()
            ->get('cr_services')
            ->row();

        return $service_row ? (int)$service_row->id : null;
    }



    public function brandNameById($id = "")

    {

        if (empty($id)) {
            return "";
        }

        $qry = $this->db

            ->select("name")

            ->where("id", $id)

            ->get("cr_brands")

            ->row();

        return $qry ? $qry->name : "";

    }



    public function modalNameById($id = "")

    {

        if (empty($id)) {
            return "";
        }

        $qry = $this->db

            ->select("name")

            ->where("id", $id)

            ->get("cr_models")

            ->row();

        return $qry ? $qry->name : "";

    }



    public function get_client_ip()

    {

        $ipaddress = "";



        if (isset($_SERVER["HTTP_CLIENT_IP"])) {

            $ipaddress = $_SERVER["HTTP_CLIENT_IP"];

        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {

            $ipaddress = $_SERVER["HTTP_X_FORWARDED_FOR"];

        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {

            $ipaddress = $_SERVER["HTTP_X_FORWARDED"];

        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {

            $ipaddress = $_SERVER["HTTP_FORWARDED_FOR"];

        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {

            $ipaddress = $_SERVER["HTTP_FORWARDED"];

        } elseif (isset($_SERVER["REMOTE_ADDR"])) {

            $ipaddress = $_SERVER["REMOTE_ADDR"];

        } else {

            $ipaddress = "UNKNOWN";

        }



        return $ipaddress;

    }



  



    public function getMailMessage(

        $brand_name = "",

        $modal_name = "",

        $full_name = "",

        $mobile = "",

        $service = "",

        $message = ""

    ) {

        $htmldata =

            '<table border="1" cellpadding="5" cellspacing="0" style="



                            width: 400px;



                            text-align: left;



                        ">



                <tr>



                    <th colsapn="2" style="border-right:0px" ><img src="https://www.mastercraftauto.co.in/assets/frontend/images/logo.png" style="width:120px"></th>



                     <th style="border-left:0px"></th>



                </tr>



                <tr>



                    <th>Brand Name :</th>



                    <td>' .

            $brand_name .

            '</td>



                </tr>



                <tr>



                    <th>Modal Name :</th>



                    <td>' .

            $modal_name .

            '</td>



                </tr>

                <tr>



                    <th>Service Name :</th>



                    <td>' .

            $service .

            '</td>



                </tr>



                <tr>



                    <th>Full Name :</th>



                    <td>' .

            $full_name .

            '</td>



                </tr>



                <tr>



                    <th>Mobile Number :</th>



                    <td>' .

            $mobile .

            '</td>



                </tr>



                <tr>



                    <th>Message :</th>



                    <td>' .

            $message .

            '</td>



                </tr>



            </table>';



        return $htmldata;

    }



    // servicess.............



    public function services($value = "")

    {

        redirect("services/dent-beating-and-painting", "location", 301);



        $data[

            "service_category"

        ] = $this->Home_public_mod->get_service_category();



        $data["services"] = $this->Home_public_mod->get_services();

        $data["tags"] = $this->Tag_mod->get_page_tags("home_services");


        $this->load->view("home/services", $data);

    }



    public function services_detail($id)

    {

        $this->load->library("user_agent");



        $data["allBrands"] = $this->db

            ->select("id,name")

            ->get("cr_brands")

            ->result();



        $data["allmodals"] = $this->db

            ->select("id,name")

            ->get("cr_models")

            ->result();

        if ($this->agent->is_mobile()) {

            $srCate = $this->db->get("cr_service_category")->result();

            foreach ($srCate as $key => $value) {

                $this->db

                    ->where("id", $value->id)

                    ->update("cr_service_category", [

                        "is_mobile_order" => $value->id,

                    ]);

            }

            // $this->db->set('is_mobile_order =','id')->update('cr_service_category');

            $this->db

                ->where("slug", $id)

                ->update("cr_service_category", ["is_mobile_order" => 0]);



            $data["service_category"] = $this->db

                ->where("status", 1)

                ->order_by("is_mobile_order", "ASC")

                ->get("cr_service_category")

                ->result();

        } else {

            $data[

                "service_category"

            ] = $this->Home_public_mod->get_service_category();

        }

        $data["services"] = $this->Home_public_mod->service_detail($id);
        // // Attach IMAGES to each service entry
        // foreach ($data["services"] as &$service) {
        //     $service->photos = $this->Home_public_mod->get_photos_by_category($service->cate_id);
        // }

        // Load tags for alt-texts for all service images on this detail page
        $data["tags"] = $this->Tag_mod->get_page_tags("home_services_details");



        if ($id == "denting-and-painting") {

            $data["services"] = $this->Home_public_mod->service_detail($id);
            $data["tags"] = $this->Tag_mod->get_page_tags("home_denting_painting");



            $data["cateData"] = $this->getCatenameById(

                $data["services"][0]->cate_id

            );



            $this->load->view("home/denting-painting", $data);

        } else {

            $data["services"] = $this->Home_public_mod->service_detail($id);



            $this->load->view("home/service-details", $data);

        }

    }



    public function getCatenameById($id = "")

    {

        return $this->db

            ->select("cate_name,title")

            ->where("id", $id)

            ->get("cr_service_category")

            ->row();

    }



    public function faq($value = "")

    {

        $faqs = $this->db

            ->select("id,question")

            ->order_by("set_position", "ASC")

            ->get("cr_faq")

            ->result();



        $faqdata = [];



        foreach ($faqs as $faq) {

            $faq->answer = $this->db

                ->select("answer")

                ->where("question_id", $faq->id)

                ->get("cr_faq_answers")

                ->result();



            $faqdata[] = $faq;

        }



        $data["faqs"] = $faqdata;
        
        // Get brands for modal
        $data["allBrands"] = $this->db->select("id,name")->get("cr_brands")->result();
        
        // Get service categories for modal
        $data["service_category"] = $this->db
            ->where("status", 1)
            ->order_by("is_mobile_order", "ASC")
            ->get("cr_service_category")
            ->result();
            
        $data['tags'] = $this->Tag_mod->get_page_tags('home_faq');

        $this->load->view("home/faq", $data);

    }



    public function aboutus($value = "")

    {
        // Get brands for modal
        $data["allBrands"] = $this->db->select("id,name")->get("cr_brands")->result();
        
        // Get service categories for modal
        $data["service_category"] = $this->db
            ->where("status", 1)
            ->order_by("is_mobile_order", "ASC")
            ->get("cr_service_category")
            ->result();
            
        $data['tags'] = $this->Tag_mod->get_page_tags('home_aboutus');
        $this->load->view("home/aboutus", $data);

    }



    public function saveFaqForm($value = "")

    {

        try {

            $full_name = $this->input->post("full_name");



            $email = $this->input->post("email");



            $mobile = $this->input->post("phone_number");



            $question = $this->input->post("question");



            $otp = $this->input->post("otp");

            // OTP BYPASS: If OTP is 'bypass', skip verification
            $otp_valid = false;
            if ($otp === 'bypass') {
                $otp_valid = true; // Bypass OTP verification
            } else {
                // Original OTP verification process
                $otpUser = $this->db

                    ->select("verification_token")

                    ->where("mobile", $mobile)

                    ->get("cr_otp")

                    ->row();

                if ($otpUser) {
                    $verification_token = $otpUser->verification_token;
                    $otp_valid = verify_hash($otp, $verification_token);
                }
            }

            if (!$otp_valid) {
                return $this->output
                    ->set_status_header(Http::BAD_REQUEST)
                    ->set_content_type("application/json")
                    ->set_output(
                        json_encode([
                            "status" => Http::BAD_REQUEST,
                            "message" => "Invalid OTP. Please try again.",
                        ])
                    );
            }



            $data = [

                "name" => $full_name,



                "email" => $email,



                "phone_number" => $mobile,



                "question" => $question,

            ];



            $res = $this->db->insert("cr_faq_another_question", $data);



            if ($res) {

                return $this->output

                    ->set_status_header(Http::OK)



                    ->set_content_type("application/json")



                    ->set_output(

                        json_encode([

                            "status" => Http::OK,



                            "message" => "Your question has been submitted successfully!",

                        ])

                    );

            } else {

                return $this->output

                    ->set_status_header(Http::BAD_REQUEST)



                    ->set_content_type("application/json")



                    ->set_output(

                        json_encode([

                            "status" => Http::BAD_REQUEST,



                            "message" => "Something went wrong",

                        ])

                    );

            }

        } catch (\Exception $e) {

            return $this->output

                ->set_status_header(Http::BAD_REQUEST)



                ->set_content_type("application/json")



                ->set_output(

                    json_encode([

                        "status" => Http::BAD_REQUEST,



                        "message" => $e,

                    ])

                );

        }

    }

    

    public function thankyou($value='')

    {
        $data['tags'] = $this->Tag_mod->get_page_tags('home_thankyou');
    	$this->load->view('home/thankyou', $data);

    }
    public function testimonilas($value='')

    {
        // Get brands for modal
        $data["allBrands"] = $this->db->select("id,name")->get("cr_brands")->result();
        
        // Get service categories for modal
        $data["service_category"] = $this->db
            ->where("status", 1)
            ->order_by("is_mobile_order", "ASC")
            ->get("cr_service_category")
            ->result();
            
        $data['tags'] = $this->Tag_mod->get_page_tags('home_testimonials');
    	$this->load->view('home/testimonilas', $data);

    }
    public function gallery($slug='')
    {
          // Get brands for modal
          $data["allBrands"] = $this->db->select("id,name")->get("cr_brands")->result();
          
          $data["service_category"] = $this->db

                ->where("status", 1)

                ->order_by("is_mobile_order", "ASC")

                ->get("cr_service_category")

                ->result();
        
        $data["rows"] = $this->Home_public_mod->galleries($slug); 
        $data['tags'] = $this->Tag_mod->get_page_tags('home_gallery');
    	$this->load->view('home/gallery', $data);

    } 
    public function video($slug='')

    {
        $data["service_category"] = $this->db
                ->where("status", 1)
                ->order_by("is_mobile_order", "ASC")
                ->get("cr_service_category")
                ->result();
        $data["rows"] = $this->Home_public_mod->videos($slug);
        $data['tags'] = $this->Tag_mod->get_page_tags('home_video');

    	$this->load->view('home/video', $data);

    }
    
      public function insurance($value='')

    {
        $data['tags'] = $this->Tag_mod->get_page_tags('home_insurance');
    	$this->load->view('home/insurance', $data);

    }

      public function centers()
    {
        $data["tags"] = $this->Tag_mod->get_page_tags('home_centers');
        $this->load->view("home/centers", $data);
    }

    public function search_centers() {
        $pinCode = $this->input->post('pin_code');
        $city = $this->input->post('city');
        $data = array();

        if (empty($pinCode) && empty($city)) {
            $data["error"] = "Please enter at least a PIN code or city to search.";
            $data["centers"] = array(); // Empty result
        } else {
            if (!empty($pinCode) && !preg_match('/^[0-9]{6}$/', $pinCode)) {
                $data["error"] = "Please enter a valid 6-digit PIN code.";
                $data["centers"] = array(); // Empty result
            } else {
                $data["centers"] = $this->Home_public_mod->get_centers_by_pincode_and_city($pinCode, $city);
                if (empty($data["centers"])) {
                    $data["error"] = "No centers found for the given PIN code or city.";
                }
            }
        }

        $data["tags"] = $this->Tag_mod->get_page_tags('home_centers');

        $this->load->view("home/centers", $data);
    }

}



?>

