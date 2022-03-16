<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {
    public function mail_format(){
        $customer_mail = $this->input->post("email1",TRUE) + "@" + $this->input->post('email2');
        $company_mail = 
        $format = "
        名前: %s
        フリガナ: %s
        メール: %s@%s
        メッセージ記入欄: %s
        ラジオボックス: %s
        ";
        $message = sprintf(
            $format,
            $this->input->post('name'),
            $this->input->post('email1'),
            $this->input->post('email2'),
            $this->input->post('choice'),
            $this->input->post('textarea'),
            $this->input->post('submit')
        );
        $mail_trim = str_replace(["       ","  ","<br>"], "  ", $message);
        $this->load->library("eamil");
        $this->eamil->from($customer_mail);
        $this->eamil->to($company_mail);
        $this->email->message($mail_trim);
        $email = $this->eamil->send();

        if($email === TRUE)
        {
            $cs_format = "
            名前: %s
            フリガナ: %s
            メール: %s@%s
            メッセージ記入欄: %s
            ラジオボックス: %s
            ";
            $message = sprintf(
                $format,
                $this->input->post('name'),
                $this->input->post('email1'),
                $this->input->post('email2'),
                $this->input->post('choice'),
                $this->input->post('textarea'),
                $this->input->post('submit')
            );

            $mail_trim = str_replace(["       ","  ","<br>"], "  ", $message);
            $this->load->library("eamil");
            $this->eamil->from($customer_mail);
            $this->eamil->to($company_mail);
            $this->email->message($mail_trim);
            $email = $this->eamil->send();
        }
    }
    
}