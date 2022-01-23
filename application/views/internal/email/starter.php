<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activation | Cancel</title>
        <link rel="icon" href="<?= base_url('assets/welcome/img/notification.png'); ?>" type="image/x-icon">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link href="<?= base_url('assets/internal/css/adminlte.css'); ?>" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body class="hold-transition lockscreen">
        <div class="lockscreen-wrapper">
            <div class="page-content-wrapper">
                <div class="section-space">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <?php $this->load->view($view); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lockscreen-footer text-center">
                <p>Copyright &copy; <b><a href="<?= base_url(); ?>" class="text-black">Murshid</a></b> - <?= date('Y'); ?><br>All Rights Reserved.</p>
            </div>
        </div>
    </body>
</html>
