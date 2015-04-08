<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('\application\libraries\phpQuery\phpQuery.php');

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
        $url = "http://www.baidu.com";
        $doc = phpQuery::newDocumentFile($url);
        echo $doc;
    }

}

/* End of file check.php */
/* Location: ./application/controllers/check.php */