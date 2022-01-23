<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="99pixel">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title><?= isset($title) ? $title : 'ERROR'; ?></title>
        <link href="<?= base_url('assets/external/img/common/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon">
        <link href="<?= base_url('assets/external/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/external/css/master.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <section class="dark-bg">
            <div class="container">
                <div class="row justify-content-center full-screen align-items-center">
                    <div class="col-lg-9 text-center">
                        <h1 class="display-3 white-color m-15px-b">404 - Page Not Found..</h1>
                        <h4 class="text-white">Whoops! it looks like the page you request wasn't found.</h4>
                        <div class="m-30px-tb">
                            <img src="<?= base_url('assets/external/img/common/404-page.svg'); ?>" alt="404">
                        </div>
                        <div class="pt-3">
                            <a href="<?= base_url(); ?>" class="m-btn m-btn-t-white m-btn-radius">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>