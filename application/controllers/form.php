
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

    public function index(){
    
        $this->load->helper(array("form","url"));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', '名前', 'required');
        $this->form_validation->set_rules('email', 'メールアドレス', 'required');
        $this->form_validation->set_rules('email2', 'メールアドレス後半', 'required');
        $this->form_validation->set_rules('choice', '選択', 'required');
        
        $this->form_validation->set_message('required', '%sが入力されていません。');

        $name = $this->input->post('name', TRUE);
        $email = $this->input->post('email', TRUE);
        $email2 = $this->input->post('email2', TRUE);
        $choice = $this->input->post('choice', TRUE);

        $data = array(
            "name" => $name,
            "email" => $email,
            "email2" => $email2,
            "choice" => $choice,
        );

        
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('form_step1');
        }
        else
        {
            $this->load->view('thanks',$data);
        }
    }
}
