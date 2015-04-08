<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('../libraries/phpQuery/phpQuery.php');

class Check extends CI_Controller {

    public function index()
    {   
        $tid = $this->input->post('tid',true);
        if($tid){
            $items = $this->db->query("select * from items where tid like '%{$tid}%' or tlink like '%{$tid}%'")->result_array();
        }else{
            $items = [];
        }
        $this->load->view('check_form',['items'=>$items]);
    }

    function test(){
        $url = "http://item.rakuten.co.jp/monomode/mn-aii-01?s-id=top_normal_browsehist&xuseflg_ichiba01=10107962";
        $doc = phpQuery::newDocumentFile($url);
        echo pq("#rakutenLimitedId_aroundCart");

    }

}

/* End of file check.php */
/* Location: ./application/controllers/check.php */