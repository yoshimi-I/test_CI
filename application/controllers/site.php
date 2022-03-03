<?php 

class Site extends CI_Controller {
    public function contact(){
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_contact");
        $this->load->view("site_footer");
    }
} 

?>