<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class External_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function exquery($table, $offset, $limit, $order, $where) {
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', $order);
        $query = $this->db->get_where($table, $where);
        return $query->result();
    }

    public function exsquery($table, $where) {
        $query = $this->db->get_where($table, $where);
        return $query->row();
    }

    public function exupdate($table, $data, $where) {
        $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }

    public function exinsert($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function exdelete($table, $where) {
        $this->db->delete($table, $where);
        return $this->db->affected_rows();
    }


}
