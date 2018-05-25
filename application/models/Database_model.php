<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 1/4/2018
 * Time: 7:00 AM
 */

class Database_model extends CI_Model
{
    public function get_entries() {
        $query = $this->db->get('data_latih');
        return $query->result();
    }
}