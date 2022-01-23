<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Welcome To Sobujpata Group</title>
    <link href="https://www.sobujpatagroup.com/assets/external/img/common/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link href="https://www.sobujpatagroup.com/assets/external/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/sojib/style.css'); ?>" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('sojib/header'); ?>
    <?php $this->load->view('sojib/menu'); ?>
    <?php $this->load->view($view); ?>
    <?php $this->load->view('sojib/footer'); ?>
    <?php $this->load->view('sojib/copyright'); ?>
    <script src="https://www.sobujpatagroup.com/assets/common/js/jquery.min.js"></script>
    <script src="https://www.sobujpatagroup.com/assets/common/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/sojib/main.js'); ?>"></script>
</body>

</html>