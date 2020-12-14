<?php
class M_login extends CI_Model
{
    function login($username, $password)
    {
        $chek = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        if ($chek->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function tampildata()
    {
        return $this->db->get('user');
    }

    function get_one_data($id)
    {
        $data = array('kd_user' => $id);
        return $this->db->get_where('user', $data);
    }
}
