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
            <?php foreach($items as $item):?>
                <div class="row" style="margin:5px 0;">
                    <div class="col-md-4">
                        <p><a href="<?php echo site_url('check/showStock/'.$item['id']);?>"><?php echo $item['sn']; ?></a></p>
                    </div>
                    <div class="col-md-4">
                        <p><a href="<?php echo $item['tlink']; ?>"><?php echo $item['tlink']; ?></a></p>
                    </div>
                    <div class="col-md-3">
                        <p><a href="<?php echo $item['slink']; ?>" class="btn btn-primary">查看源商品</a></p>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo site_url('check/showStock/'.$item['id']); ?>" class="btn btn-info"> 查看库存 </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>