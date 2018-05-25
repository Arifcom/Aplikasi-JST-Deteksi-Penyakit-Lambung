<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/22/2017
 * Time: 9:21 PM
 */

class Test extends CI_Controller
{
    public function index()
    {
        $query_bobot        = $this->db->query("SELECT DISTINCT penyakit FROM data_latih");
        $query_bobot->result();

        foreach ($query_bobot as $datas):
        $bobot = array
        (

                array($datas->mual,$datas->muntah)

        );
        endforeach;
    }
}