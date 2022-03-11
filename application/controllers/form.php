
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

    public function index(){
        $this->contact_valid();
        $this->load->view("form_step1");
    }
    public function confirm(){
        $name = $this->input->post('name');
        $email1 = $this->input->post('email1');
        $email2 = $this->input->post('email2');
        $choice = $this->input->post('choice');
        $textarea = $this->input->post('textarea');
        $submit = $this->input->post('submit');

        $data = array(
            'name' => $name,
            'email1' => $email1,
            'email2' => $email2,
            'choice' => $choice,
            'textarea' => $textarea,
        );

        $this->contact_valid();
        
        if ($this->form_validation->run() === false){
            $this->load->view("form_step1");
        }
        else{
            $this->load->view("confirm",$data);
        }
    }

    public function send(){
        $this->load->helper('form');
        $name = $this->input->post('name');
        $email1 = $this->input->post('email1');
        $email2 = $this->input->post('email2');
        $choice = $this->input->post('choice');
        $textarea = $this->input->post('textarea');
        $submit = $this->input->post('submit');

        $data = array(
            'name' => $name,
            'email1' => $email1,
            'email2' => $email2,
            'choice' => $choice,
            'textarea' => $textarea,
        );
        $submit = $this->input->post('submit');
        if ($submit === "編集"){
            $this->load->view("form_step1",$data);

        } 
        if ($submit === "このまま送信"){
            $this->load->view("send");

            // $this->contact_model->mail_format();
        }
    }

    private function contact_valid() {
        $this->load->helper('form',);
        $this->load->helper('array');
        $this->load->library("form_validation");
        $this->form_validation->set_error_delimiters("<p style=color:red>","</p>");
        $this->form_validation->set_rules('name', '名前', 'required');
        $this->form_validation->set_rules('email1', 'メールアドレス', 'required');
        $this->form_validation->set_rules('email2', 'メールアドレス後半', 'required');
        $this->form_validation->set_rules('choice', '選択', 'required');
        $this->form_validation->set_message('required', '%sが入力されていません。');
        
    }
}
