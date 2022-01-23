<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->lang->load('main', $this->session->userdata('language'));
        $this->load->model('admin_model');
        mycrypt::oncounter();
        if (!$this->session->userdata('coadminauth')) {
            redirect('admin/signin');
        }
    }

    public function dashboard() {
        $last = mycrypt::countbygrp('tb_chatting', 'user', array('sender' => 'u'));
        $cid = $this->input->get('msg') ? $this->input->get('msg') : $last;
        $this->session->set_userdata('chatid', $cid);
        $data['title'] = 'Admin | Dashboard';
        $data['dashcls'] = array('main' => 'active', 'first' => 'active');
        $data['chats'] = $this->admin_model->getchathead('tb_chatting', 'DESC', 'user', array('sender' => 'u'));
        $data['messages'] = $this->admin_model->getchatmsg('tb_chatting', 'DESC', array('user' => $cid));
        $this->admin_model->adupdate('tb_chatting', array('seen' => 1), array('user' => $cid));
        $data['setting'] = mycrypt::settings();
        if ($data['setting']->refresh >= 60) {
            header('refresh:' . $data['setting']->refresh);
        }
        $data['header'] = array('internal/header', lang('dashboard'));
        $data['view'] = 'internal/dashboard';
        $this->load->view('internal/starter', $data);
    }

    public function visitors() {
        $data['title'] = 'Admin | Visitors';
        $data['visitorcls'] = 'active';
        #Pagination Start
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config['base_url'] = base_url('admin/visitors');
        $config['total_rows'] = $this->db->count_all('tb_visitors');
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        #Pagination End
        $data['visitors'] = $this->admin_model->adquery('tb_visitors', $offset, $config['per_page'], 'DESC', array('country !=' => NULL));
        $data['header'] = array('internal/header', lang('visitors'));
        $data['view'] = 'internal/visitors';
        $this->load->view('internal/starter', $data);
    }

    public function myprofile() {
        $data['title'] = 'Admin | Profile';
        $data['profile'] = $this->admin_model->adsquery('tb_admin', array('email' => $this->session->userdata('coadminauth')['email']));
        $data['header'] = array('internal/header', 'Profile');
        $data['view'] = 'internal/myprofile';
        $this->load->view('internal/starter', $data);
    }

    public function moderators() {
        $data['title'] = 'Admin | Moderators';
        $data['modcls'] = array('open' => 'menu-open', 'main' => 'active', 'first' => 'active');
        $data['moderstors'] = $this->admin_model->adquery('tb_admin', NULL, NULL, 'DESC', array('role !=' => 'admin'));
        $data['header'] = array('internal/header', lang('moderators'));
        $data['view'] = 'internal/admins';
        $this->load->view('internal/starter', $data);
    }

    public function addmoderator() {
        $data['title'] = 'Admin | Moderators';
        $data['modcls'] = array('open' => 'menu-open', 'main' => 'active');
        $data['header'] = array('internal/header', lang('moderators'));
        $data['view'] = 'internal/forms/moderator';
        $this->load->view('internal/starter', $data);
    }

    public function users() {
        $data['title'] = 'Admin | Users';
        $data['modcls'] = array('open' => 'menu-open', 'main' => 'active', 'second' => 'active');
        $data['users'] = $this->admin_model->adquery('tb_users', NULL, NULL, 'DESC', array());
        $data['header'] = array('internal/header', lang('users'));
        $data['view'] = 'internal/users';
        $this->load->view('internal/starter', $data);
    }

    public function mailing() {
        $data['title'] = 'Admin | Mailing';
        $data['mailcls'] = array('open' => 'menu-open', 'main' => 'active', 'first' => 'active');
        $data['header'] = array('internal/header', lang('Email'));
        $data['view'] = 'internal/forms/email';
        $this->load->view('internal/starter', $data);
    }

    public function sentitem() {
        $data['title'] = 'Admin | Sent Mail';
        $data['mailcls'] = array('open' => 'menu-open', 'main' => 'active', 'second' => 'active');
        $data['sentmails'] = $this->admin_model->adquery('tb_emails', NULL, NULL, 'DESC', array());
        $data['header'] = array('internal/header', 'Sent Item');
        $data['view'] = 'internal/sentmail';
        $this->load->view('internal/starter', $data);
    }

    public function contact() {
        $data['title'] = 'Admin | Contact';
        $data['msgcls'] = array('open' => 'menu-open', 'main' => 'active', 'first' => 'active');
        $data['messages'] = $this->admin_model->adquery('tb_contacts', NULL, NULL, 'DESC', array());
        $data['header'] = array('internal/header', 'Message');
        $data['view'] = 'internal/contactmsg';
        $this->load->view('internal/starter', $data);
    }

    public function logs() {
        if ($this->session->userdata('coadminauth')['role'] == 'admin') {
            $data['title'] = 'Admin | Contact';
            $data['logscls'] = array('open' => 'menu-open', 'main' => 'active', 'first' => 'active');
            $data['logs'] = $this->admin_model->logdata();
            $data['header'] = array('internal/header', 'Logs');
            $data['view'] = 'internal/logs';
            $this->load->view('internal/starter', $data);
        } else {
            redirect($this->agent->referrer());
        }
    }

    public function dltcache() {
        $this->output->delete_cache('admin/signin');
        $this->session->set_flashdata('successtoast', 'Cache clean is successful');
        redirect($this->agent->referrer());
    }

}
