<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 1/3/2018
 * Time: 3:32 PM
 */

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "<a href='" . base_url() . "detail/latihtg'>Melatih Data 70:30</a></br>";
        echo "<a href='" . base_url() . "detail/ujitg'>Menguji Data 70:30</a></br>";
        echo "<a href='" . base_url() . "detail/latihdd'>Melatih Data 80:20</a></br>";
        echo "<a href='" . base_url() . "detail/ujidd'>Menguji Data 80:20</a></br>";
    }

    public function latihtg()
    {
        $data['title']      = 'Data Latih';
        $data['active']     = 'data-latih';
        $data['content']    = 'latih7030';
        $data['query']      = '';
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         = '';
        $this->parser->parse('template/template', $data);
    }

    public function ujitg()
    {
        $data['title']      = 'Data Uji';
        $data['active']     = 'data-uji';
        $data['content']    = 'uji7030';
        $data['query']      = '';
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         = '';
        $this->parser->parse('template/template', $data);
    }

    public function latihdd()
    {
        $data['title']      = 'Data Latih';
        $data['active']     = 'data-latih';
        $data['content']    = 'latih8020';
        $data['query']      = '';
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         = '';
        $this->parser->parse('template/template', $data);
    }

    public function ujidd()
    {
        $data['title']      = 'Data Uji';
        $data['active']     = 'data-uji';
        $data['content']    = 'uji8020';
        $data['query']      = '';
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         = '';
        $this->parser->parse('template/template', $data);
    }
}