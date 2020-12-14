<?php
class M_login extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $query = $this->db->get_where('user', ['kd_user' => $this->session->userdata('kd_user')]);
        return $query->row_array();
    }
}