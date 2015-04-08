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
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>