<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Welcome to CodeIgniter</title>

<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo site_url('check');?>" class="btn btn-block btn-info">回到首页</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo $slink;?>" class="btn btn-block btn-info">去购买</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo $stock; ?>
        </div>
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>