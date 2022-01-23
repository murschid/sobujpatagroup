<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->lang->load('main', $this->session->userdata('language'));
        $this->load->model('admin_model');
    }

    public function add_moderator() {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required|valid_email|min_length[9]|max_length[30]|is_unique[tb_admin.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('passwordtwo', 'Confirm Password', 'trim|xss_clean|required|min_length[6]|max_length[20]|matches[password]');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'education' => $this->input->post('education'),
                'profession' => $this->input->post('profession'),
                'skills' => $this->input->post('skills'),
                'location' => $this->input->post('location'),
                'facebook' => $this->input->post('facebook'),
                'token' => sha1(uniqid()),
                'photo' => mycrypt::single_image('assets/internal/img/admin', 'photo'),
                'IPs' => $this->input->ip_address(),
                'last_update' => time(),
                'time' => time(),
            );
            if ($this->admin_model->adinsert('tb_admin', $data)) {
                $this->admin_model->adinsert('tb_settings', array('user' => $data['email'], 'time' => time()));
                $data['title'] = 'Confirm | Account';
                if (!mycrypt::localhost()) {
                    $config['smtp_host'] = 'mail.murshidraj.me';
                    $config['smtp_user'] = 'admin@murshidraj.me';
                    $config['smtp_pass'] = 'a_ZxAn3eR7;X';
                    $config['smtp_port'] = '587';
                    $this->email->initialize($config);
                    $message = $this->load->view('internal/email/confirmEmail', $data, TRUE);
                    $this->email->from('admin@murshidraj.me', 'Murshid (Admin)');
                    $this->email->to($this->input->post('email'));
                    $this->email->subject('Account Confirmation');
                    $this->email->message($message);
                    $this->email->send();
                } else {
                    redirect('email/confirm');
                }
                $this->session->set_flashdata('success', 'Registration successful');
            } else {
                $this->session->set_flashdata('errors', 'Registration unsuccessful');
            }
        } else {
            $this->session->set_flashdata('errors', validation_errors());
        }
        redirect($this->agent->referrer());
    }

    public function update_moderator() {
        if ($this->input->get('key') == 'admin' && $this->session->userdata('coadminauth')['role'] == 'admin') {
            $profile = array(
                'name' => $this->input->post('name'),
                'password' => $this->input->post('password'),
                'education' => $this->input->post('education'),
                'profession' => $this->input->post('profession'),
                'skills' => $this->input->post('skills'),
                'location' => $this->input->post('location'),
                'facebook' => $this->input->post('facebook'),
                'IPs' => $this->input->post('ipaddress'),
                'last_update' => time(),
            );
        } else {
            $profile = array(
                'name' => $this->input->post('name'),
                'education' => $this->input->post('education'),
                'profession' => $this->input->post('profession'),
                'skills' => $this->input->post('skills'),
                'location' => $this->input->post('location'),
                'facebook' => $this->input->post('facebook'),
                'about' => $this->input->post('about'),
                'IPs' => $this->input->post('ipaddress'),
                'photo' => mycrypt::single_image('assets/internal/img/admin', 'photo'),
                'last_update' => time(),
            );
        }
        if ($this->admin_model->adupdate('tb_admin', $profile, array('email' => $this->session->userdata('coadminauth')['email']))) {
            $this->session->set_flashdata('successtoast', 'Update successful!');
        } else {
            $this->session->set_flashdata('errorstoast', 'Update unsuccessful!');
        }
        redirect($this->agent->referrer());
    }

    public function chatmsg() {
        if ($this->input->post('data') != NULL) {
            $data = array(
                'text' => $this->input->post('data'),
                'mod' => $this->session->userdata('coadminauth')['id'],
                'user' => $this->session->userdata('chatid'),
                'sender' => 'm',
                'time' => time()
            );
            $this->admin_model->adinsert('tb_chatting', $data);
        }
    }

}
