<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eshow extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->lang->load('main', $this->session->userdata('language'));
        $this->load->model('admin_model');
    }

    public function moderator($id) {
        if ($this->session->userdata('coadminauth')['role'] == 'admin') {
            $data['title'] = 'Admin | Moderator';
            $data['moderator'] = $this->admin_model->adsquery('tb_admin', array('id' => $id));
            $data['view'] = 'internal/forms/adminsip';
            $this->load->view('internal/starter', $data);
        } else {
            redirect($this->agent->referrer());
        }
    }

    public function contactmsg() {
        $data['message'] = $this->admin_model->adsquery('tb_contacts', array('id' => $this->input->post('id')));
        $this->admin_model->adupdate('tb_contacts', array('seen' => 1), array('id' => $this->input->post('id')));
        $this->load->view('internal/modals/contactmsg', $data);
    }

    public function notification() {
        $table = $this->input->post('table');
        $whrfst = $this->input->post('whrfst');
        $whrlst = $this->input->post('whrlst');
        $data['messages'] = $this->admin_model->adquery($table, NULL, NULL, 'DESC', array($whrfst => $whrlst));
        $this->load->view('internal/modals/notifications', $data);
    }
    
    public function searchuser() {
        if (is_numeric($this->input->post('user'))) {
            $ajdata = array('id' => $this->input->post('user'));
        } else {
            $ajdata = array('email' => $this->input->post('user'));
        }
        $data['users'] = $this->admin_model->ajaxsearch('tb_users', $ajdata);
        $this->load->view('internal/ajax/users', $data);
    }

}
