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
        $charset = 'utf-8';
        if(preg_match('/etsy/', $slink)){            
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#listing-page-cart")->html();
        }elseif(preg_match('/creema/', $slink)){
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#content-sub .detail-header_sidemenu")->html();
        }elseif(preg_match('/rakuten/', $slink)){            
            phpQuery::$defaultCharset = 'euc-jp';
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#rakutenLimitedId_cart")->html() . pq("#rakutenLimitedId_aroundCart")->html();
            // return $this->load->view('show_jp',['stock'=>$stock]);
        }elseif(preg_match('/global\.rakuten/', $slink)){
            phpQuery::newDocumentFile($slink);
            $stock .= pq(".b-product-main .b-text")->html();
        }elseif(preg_match('/knap/', $slink)){
            phpQuery::newDocumentFile($slink);
            $stock .= pq("#pagemain")->html();
        }
        return $this->load->view('show',['stock'=>$stock,'slink'=>$slink]);
    }

    function insertItem(){
        $this->load->view('check_insert_form');
    }

    function updateTxt(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules(array(
            array(
                'field' => 'mfile',
                'label' =>'',
                'rules' => ''
            )
        ));
        if($this->form_validation->run() == FALSE){
            return $this->load->view('update_txt');
        }else{
            $file = $_FILES['mfile'];
            // var_dump($file);
            $myfile = fopen($file['tmp_name'], "r") or die("Unable to open file!");
            $this->db->query("delete from items");
            while(!feof($myfile)) {
                 $line = fgets($myfile);
                 $fields = explode(',', $line);
                 $sn = $fields[1];
                 $slink = $fields[2];
                 $tlink = empty($fields[3])? $tlink : $fields[3];
                 var_dump([$sn,$slink,$tlink]);
                 $this->db->insert('items',['sn'=>$sn,'slink'=>$slink,'tlink'=>$tlink]);
            }
            fclose($myfile);
        }
    }

}

/* End of file check.php */
/* Location: ./application/controllers/check.php */