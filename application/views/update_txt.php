<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
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
    <?php echo validation_errors();?>
        <div class="col-md-12">
            <?php echo form_open_multipart('check/updatetxt'); ?>
                <div class="form-group">
                    <input type="file" name="mfile" id="mfile" class="form-control" placeholder="File" value="">
                </div>
                <div class="form-group">
                    <input type="submit" value="提交" name="sub" class="btn btn-block btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>