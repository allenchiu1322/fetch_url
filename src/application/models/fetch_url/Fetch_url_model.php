<?php

class Fetch_url_model extends CI_Model {

    function __construct() {
        parent::__construct();
//        $this->load->library('simple_html_dom');
//        $this->load->database();
    }


    public function fetch($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $ret = curl_exec($ch);
        curl_close($ch);
        return $ret;
    }

}
