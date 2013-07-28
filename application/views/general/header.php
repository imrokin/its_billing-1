<?php
$this->config->load('usr/common');
$asset_path=base_url($this->config->item('asset')).'/';
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page [CI Ported Version]</title>
        <!-- Bootstrap -->
        <link href="<?php echo $asset_path;?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $asset_path;?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo $asset_path;?>vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo $asset_path;?>assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo $asset_path;?>vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
