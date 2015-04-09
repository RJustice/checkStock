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
                    <input type="text" name="tid" id="tid" class="form-control" placeholder="宝贝ID" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="tlink" id="tlink" class="form-control" placeholder="淘宝链接" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="sn" id="sn" class="form-control" placeholder="货号" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="slink" id="slink" class="form-control" placeholder="源链接" value="">
                </div>
                <div class="form-group">
                    <input type="submit" value="提交" class="btn btn-block btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>