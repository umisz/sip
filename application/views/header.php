<html>  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sistem Informasi Posyandu</title>
        <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/vendor/morrisjs/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/gif" style="size: 100%">
    </head>    
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <img src="<?php echo base_url();?>/assets/images/logo.png" height="45px" align="center"><a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="<?php echo base_url('logout'); ?>" style="color: #d43d21"><i class="fa fa-sign-out fa-fw" style="color: #d43d21"></i> Logout</a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a style="color: #d43d21"><i class="fa fa-user fa-fw" style="color: #d43d21"></i> <?php echo $this->session->userdata("nama"); ?></a>
                </li>
            </ul>
            
        