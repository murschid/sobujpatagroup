<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="99pixel">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title><?= isset($title) ? $title : 'Welcome'; ?></title>
        <link href="<?= base_url('assets/external/img/common/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon">
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
        <link href="<?= base_url('assets/external/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!--<link href="<?= base_url('assets/external/css/font-awesome.min.css'); ?>" rel="stylesheet">-->
        <link href="<?= base_url('assets/external/css/master.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <?php $this->load->view('external/header'); ?>
        <main class="mymain">
            <?php $this->load->view($view); ?>
        </main>
        <?php $this->load->view('external/footer'); ?>
        <script src="<?= base_url('assets/common/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/common/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>