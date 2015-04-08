<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo current_url(); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="tid" id="tid" class="form-control" placeholder="宝贝ID" value="<?php echo $this->input->post('tid'); ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="查看" class="btn btn-block btn-primary">
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div id="check-container"></div>
            <?php if(count($items) == 1):?>
            <script type="text/javascript">
                $(document).ready(function(){
                    var url = '<?php echo $items[0]['slink']; ?>';
                    $("#check-container").html('');
                    if(/etsy/.test(url) == true){

                    }else if(/creema/.test(url) == true){

                    }else if(/rakuten/.test(url) == true){
                        // $.load(url+' #rakutenLimitedId_cart',function(data){
                        //     $("#check-container").append(data);
                        // });
                        // $.load(url+' #rakutenLimitedId_aroundCart',function(){

                        // });
                    }
                    $.load('<?php echo $items[0]['slink'];?>',function(){

                    });
                });
            </script>
            <?php else:?>
                <?php foreach($items as $item):?>
                <div class="col-md-10"></div>
                <div class="col-md-2">检查</div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>