<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        #if (!in_array($this->input->ip_address(), array('103.88.140.169', '103.88.140.174', '202.91.40.78', '49.12.5.139', '127.0.0.1', '::1'))) {
        #redirect('welcome');
        #}
    }

    public function index() {
        $data['title'] = 'Welcome To Sobujpata Group';
        $data['home'] = 'active';
        $data['view'] = 'sojib/home';
        $this->load->view('sojib/main/home', $data);
    }

    public function about() {
        $data['title'] = 'Sobujpata Group | About';
        $data['intro'] = array('text' => 'About', 'image' => 'bg-1.jpg');
        $data['about'] = 'active';
        $data['view'] = 'sojib/about';
        $this->load->view('sojib/main/about', $data);
    }

    public function contact() {
        $data['title'] = 'Sobujpata Group | Contact';
        $data['intro'] = array('text' => 'Contact', 'image' => 'bg-2.jpg');
        $data['contact'] = 'active';
        $data['view'] = 'sojib/contact';
        $this->load->view('sojib/main/contact', $data);
    }

    public function service() {
        $data['title'] = 'Sobujpata Group | Contact';
        $data['intro'] = array('text' => 'Contact', 'image' => 'bg-2.jpg');
        $data['contact'] = 'active';
        $data['view'] = 'sojib/service';
        $this->load->view('sojib/main/service', $data);
    }

    public function innovative() {
        $data['title'] = 'Innovative Consultant';
        $this->load->view('sojib/main/innovative', $data);
    }

    public function travels() {
        $data['title'] = 'Sobujpata Tours & Travels';
        $this->load->view('sojib/main/tours', $data);
    }

    public function contactus() {
        if ($this->input->post('email') != NULL && $this->input->post('message') != NULL) {
            $config['smtp_host'] = 'sobujpatagroup.com';
            $config['smtp_user'] = 'contact@sobujpatagroup.com';
            $config['smtp_pass'] = 'pB4&R]bbRd7w';
            $config['smtp_port'] = '465';
            $this->email->initialize($config);
            $this->email->clear();
            $data = array(
                'name'    => $this->input->post('name'),
                'email'   => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
            );
            $this->email->to('innovativeconsultant07@gmail.com');
            $this->email->from('contact@sobujpatagroup.com', $this->input->post('email'));
            $this->email->subject($this->input->post('subject'));
            $message = $this->load->view('external/email/message', $data, TRUE);
            $this->email->message($message);
            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Message has been sent successfully');
            } else {
                $this->session->set_flashdata('errors', 'Message sending failed');
            }
        } else {
            $this->session->set_flashdata('errors', 'Please write something');
        }
        redirect($this->agent->referrer());
    }

    public function error() {
        $data['title'] = 'ERROR - 404';
        $this->load->view('external/error', $data);
    }

    public function check() {
        $message = 'Message';
        $config['smtp_host'] = 'sobujpatagroup.com';
        $config['smtp_user'] = 'contact@sobujpatagroup.com';
        $config['smtp_pass'] = 'pB4&R]bbRd7w';
        $config['smtp_port'] = '465';
        $this->email->initialize($config);
        $this->email->from('contact@sobujpatagroup.com', 'Sobujpata Group');
        $this->email->to('rajcsediu@gmail.com');
        $this->email->subject('Testing Purpose');
        $this->email->message($message);
        if ($this->email->send()) {
            echo 'Success';
        } else {
            echo 'Failed';
        }
    }

}
