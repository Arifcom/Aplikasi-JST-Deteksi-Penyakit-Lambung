<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/25/2017
 * Time: 9:45 PM
 */

class Data_latih_model extends CI_Model
{
    public function get_entries() {
        $query = $this->db->get('data_latih');
        return $query->result();
    }
}