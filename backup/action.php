<?php

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include "connection.php";
    
    class Craft {
        
        function getBrands(){
           try {
               $conn = $_SESSION['db_conn'];
               $qry = "SELECT `id`,`name` FROM `cr_brands`";
               $result = $conn->query($qry);
               return $result;
           } catch (Exception $e){
               echo 'Message: ' .$e->getMessage();
           }
        }
        
        function getModalById($id=''){
           $conn = $_SESSION['db_conn'];
           $qry = "SELECT `id`,`name` FROM `cr_models` WHERE `brand_id` = '".$id."'";
           $result = $conn->query($qry);
           
           $data = [];
           foreach($result as $row){
               $data[] = [
                    'id' => $row['id'],
                    'name' => $row['name']
                ];
           }
           return $data;
        }
        
        function submitContus($post=''){
            $conn = $_SESSION['db_conn'];
            $brand_id = $post['brand_id'];
            $brand_name = $this->brandNameById($brand_id);
            $modal_id = $post['modal_id'];
            $modal_name = $this->modalNameById($modal_id);
            $full_name = $post['full_name'];
            $mobile = $post['phone_number'];
            $message = $post['message'];
            $query = "INSERT INTO cr_contact_us(`brand_name`,`modal_name`,`full_name`,`mobile`,`message`) VALUES('".$brand_name."','".$modal_name."','".$full_name."','".$mobile."','".$message."')";
            $res = $conn->query($query);
            $mailMessage = $this->getMailMessage($brand_name,$modal_name,$full_name,$mobile,$message);
            $subject = "Let’s Connect";
            $this->sendEmail($subject,$mailMessage);
            if($res){
                return $res;
            }else{
                return '';
            }
            
        }
        
        function getMailMessage($brand_name='',$modal_name='',$full_name='',$mobile='',$message=''){
            $htmldata = '<table border="1" cellpadding="5" cellspacing="0" style="
                            width: 400px;
                            text-align: left;
                        ">
                <tr>
                    <th colsapn="2" style="border-right:0px" ><img src="https://mastercraftauto.co.in/images/logo.png" style="width:120px"></th>
                     <th style="border-left:0px"></th>
                </tr>
                <tr>
                    <th>Brand Name :</th>
                    <td>'.$brand_name.'</td>
                </tr>
                <tr>
                    <th>Modal Name :</th>
                    <td>'.$modal_name.'</td>
                </tr>
                <tr>
                    <th>Full Name :</th>
                    <td>'.$full_name.'</td>
                </tr>
                <tr>
                    <th>Mobile Number :</th>
                    <td>'.$mobile.'</td>
                </tr>
                <tr>
                    <th>Message :</th>
                    <td>'.$message.'</td>
                </tr>
            </table>';
            return $htmldata;
        }
        
        function brandNameById($id=''){
            $conn = $_SESSION['db_conn'];
            $query = "SELECT `name` FROM cr_brands where `id`= '".$id."'";
            $result = $conn->query($query);
            
            $name = '';
            foreach($result as $brand){
                $name = $brand['name'];
            }
            return $name;
        }
        
        function modalNameById($id=''){
            $conn = $_SESSION['db_conn'];
            $query = "SELECT `name` FROM cr_models where `id`= '".$id."'";
            $result = $conn->query($query);
            
            $name = '';
            foreach($result as $brand){
                $name = $brand['name'];
            }
            return $name;
        }
        
        function sendEmail($subject='', $message=''){
            $mail = new PHPMailer();
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.googlemail.com';         // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                         // Enable SMTP authentication
            $mail->Username = "noreply_ar@nipponpaint.co.in";                 // SMTP username
            $mail->Password = "#Edcrty9*";                           // SMTP password
            $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = "587";
            $mail->setFrom("noreply_ar@nipponpaint.co.in","Nippon Master craft");
            $mail->addAddress('info.mastercraftggn@nipponpaint.co.in');
            //$mail->addBCC('madhu.pomelodigital@gmail.com');
            $mail->addBCC('sm.sharma8882@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $send = $mail->Send();
        }
    }
   
?>