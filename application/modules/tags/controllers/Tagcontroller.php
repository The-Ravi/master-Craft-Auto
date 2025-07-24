<?php

class Tagcontroller extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tag_mod');
    }

    /** Load the tags management view */
    public function index()
    {
      $this->load->view('index');
    }

    /** Get tags for datatable/ajax-style listing */
    public function getAllTags()
    {
        try {
            if ($request = $this->input->post()) {
                $draw = $request['draw'];
                $offset = $request['start'];
                $limit = $request['length'];
                $searchValue = $this->db->escape_str($request['search']['value']);
                $tags = $this->Tag_mod->getList($searchValue, $limit, $offset);
                $totalRecords = $this->Tag_mod->getList($searchValue);

                $data = [];
                foreach ($tags as $t) {
                    $data[] = [
                        'id' => $t->id,
                        'page' => $t->page,
                        'type' => $t->tag_type,
                        'key' => $t->tag_key,
                        'value' => $t->tag_value,
                        'last_modified' => date('Y-m-d', strtotime($t->last_modified)),
                        'action' => '
                            <div class="buttons">
                                <a href="'.base_url().'admin/tags/edit/'.$t->id.'"><i class="far fa-edit" title="Edit"></i></a>
                                <a href="javascript:void(0);" data-id="'.$t->id.'" onclick="deleteTag(this);"><i class="fas fa-trash-alt" title="Delete"></i></a>
                            </div>
                        '
                    ];
                }

                $response = [
                    'draw' => intval($draw),
                    'iTotalDisplayRecords' => $totalRecords,
                    'iTotalRecords' => $totalRecords,
                    'data' => $data
                ];
                return $this->output->set_status_header(Http::OK)
                    ->set_content_type('application/json')
                    ->set_output(json_encode($response));
            } else {
                return $this->output->set_status_header(Http::BAD_REQUEST)
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => Http::BAD_REQUEST,
                        'message' => "Invalid request access denied"
                    ]));
            }
        } catch (\Exception $e) {
            return $this->output->set_status_header(Http::BAD_REQUEST)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => Http::BAD_REQUEST,
                    'message' => $e->getMessage()
                ]));
        }
    }

    /** Form to add a new tag */
    public function create()
    {
        $this->load->view('create');
    }

    /** Persist a new tag */
    public function saveTag()
    {
        try {
            $page = trim($this->input->post('page'));
            $tag_type = $this->input->post('tag_type');
            $tag_key = $this->input->post('tag_key');
            $tag_value = $this->input->post('tag_value');

            $data = [
                'page' => $page,
                'tag_type' => $tag_type,
                'tag_key' => $tag_key,
                'tag_value' => $tag_value,
            ];

            $this->db->insert('cr_page_tags', $data);

            return redirect('admin/tags');
        } catch (\Exception $e) {
            print_r($e); die;
        }
    }

    /** Form to edit a tag */
    public function edit($id = '')
    {
        if ($id) {
            $data['row'] = $this->Tag_mod->edit($id);
            $this->load->view('edit', $data);
        } else {
            redirect('admin/tags', 'location', 301);
        }
    }

    /** Persist updates to a tag */
    public function updateTag($id = '')
    {
        try {
            $page = trim($this->input->post('page'));
            $tag_type = $this->input->post('tag_type');
            $tag_key = $this->input->post('tag_key');
            $tag_value = $this->input->post('tag_value');

            $data = [
                'page' => $page,
                'tag_type' => $tag_type,
                'tag_key' => $tag_key,
                'tag_value' => $tag_value,
            ];

            $this->db->where('id', $id)->update('cr_page_tags', $data);

            return redirect('admin/tags');

        } catch (\Exception $e) {
            print_r($e); die;
        }
    }

    /** Delete a tag (AJAX) */
    public function tagDelete()
    {
        try {
            $id = $this->input->post('id');
            $result = $this->db->where('id', $id)->delete('cr_page_tags');

            return $this->output->set_status_header(Http::OK)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => Http::OK,
                    'message' => "Tag deleted successfully"
                ]));
        } catch (\Exception $e) {
            return $this->output->set_status_header(Http::BAD_REQUEST)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => Http::BAD_REQUEST,
                    'message' => $e->getMessage()
                ]));
        }
    }
}
?>