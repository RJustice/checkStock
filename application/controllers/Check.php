<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'/libraries/phpQuery/phpQuery.php');


class Check extends CI_Controller {

    public function index()
    {   
        $tid = $this->input->post('tid',true);
        if($tid){
            $items = $this->db->query("select * from items where tid like '%{$tid}%' or tlink like '%{$tid}%' or sn like '%{$tid}%'")->result_array();
            // echo $this->db->last_query();exit;
        }else{
            $items = [];
        }
        if(count($items) == 1){
            redirect(site_url('check/showStock/'.$items[0]['id']));
        }else{
            return $this->load->view('check_form',['items'=>$items]);
        }
    }

    function showStock(){
        $id = $this->uri->segment(3);
        $slink = $this->db->query("select slink from items where id = ".$id)->row()->slink;
        $stock = '';
        if(preg_match('/etsy/', $slink)){            
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#listing-page-cart")->html();
        }elseif(preg_match('/creema/', $slink)){
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#content-sub .detail-header_sidemenu")->html();
        }elseif(preg_match('/rakuten/', $slink)){
            // phpQuery::$defaultCharset="ISO-8859-1";        
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#rakutenLimitedId_cart")->html() . pq("#rakutenLimitedId_aroundCart")->html();
            $stock = mb_convert_encoding($stock,'ISO-8859-1','utf-8');
        }
        return $this->load->view('show',['stock'=>$stock]);
    }

    function test(){
        $url = "http://item.rakuten.co.jp/monomode/mn-aii-01?s-id=top_normal_browsehist&xuseflg_ichiba01=10107962";
        $doc = phpQuery::newDocumentFile($url);
        echo pq("#rakutenLimitedId_aroundCart");

    }

}

/* End of file check.php */
/* Location: ./application/controllers/check.php */