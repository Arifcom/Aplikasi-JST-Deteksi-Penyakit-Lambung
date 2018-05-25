<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/13/2017
 * Time: 9:21 AM
 */

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['title']      = 'Dashboard';
        $data['active']     = 'dashboard';
        $data['content']    = 'dashboard';
        $data['query']      = '';
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         = '';
        $this->parser->parse('template/template', $data);
    }
}