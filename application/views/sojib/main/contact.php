<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Sobujpata Group | Contact</title>
    <link href="https://www.sobujpatagroup.com/assets/external/img/common/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link href="https://www.sobujpatagroup.com/assets/external/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/sojib/main') ?>/css/contact.css" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('sojib/main/header'); ?>
    <div class="full_wrapper contect_bnnar section bg-center bg-cover effect-section">
        <main class="mymain">
            <section class="">
                <div class="mask theme-bg opacity-6"></div>
                <div class="container">
                    <div class="row justify-content-center p-50px-t">
                        <div class="col-lg-8 text-center">
                            <h2 class="white-color m-20px-b text-uppercase">Contact</h2>
                            <ol class="breadcrumb white justify-content-center">
                                <li><a href="https://www.sobujpatagroup.com/home.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <div class="full_wrapper">
        <main class="mymain">
            <section class="section white-bg">
                <div class="container">
                    <div class="row md-m-25px-b m-45px-b justify-content-center text-center">
                        <div class="col-lg-8">
                            <h3 class="p-20px-b theme-after after-50px text-uppercase">You deserve all time best</h3>
                            <p class="m-0px font-2">Our customer relationship executive is always alert to give you quick response regaining to your professional and business query.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 m-15px-tb">
                            <div class="box-shadow p-30px border-all-10 border-color-white">
                                <form action="https://www.sobujpatagroup.com/home/contactus.html" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Name <span class="text-danger">*</span></label>
                                                <input type="text" name="name" placeholder="Type Your Name" required minlength="3" maxlength="30" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" placeholder="your @email" required minlength="6" maxlength="40" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Subject <span class="text-danger">*</span></label>
                                                <input type="text" name="subject" placeholder="Quary" required minlength="3" maxlength="100" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Message <span class="text-danger">*</span></label>
                                                <textarea name="message" rows="2" class="form-control" required minlength="3" maxlength="1000" placeholder="Hi there, I would like to..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-10px-t">
                                            <button class="m-btn m-btn-theme m-btn-radius w-100" type="submit" name="send">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 m-15px-tb">
                            <div class="border-all-10 border-color-white p-40px-tb p-20px-lr box-shadow h-100">
                                <h5 class="font-1 black-color m-10px-b">Our Address Info</h5>
                                <p class="black-color-light m-30px-b">24/1, Nalbhog Main Road (Rupayan City Gate), Uttara-12, Dhaka-1230, Bangladesh</p>
                                <h5 class="font-1 black-color m-10px-b">Our Contact Info</h5>
                                <p class="m-5px-b"><a href="mailto:contact@sobujpatagroup.com" class="text-dark">contact@sobujpatagroup.com</a></p>
                                <p class="m-0px"><a href="tel:01912164758" class="text-dark">+88 01912164758</a></p>
                                <p class="m-0px"><a href="tel:01873741844" class="text-dark">+88 01873741844</a></p>
                                <h5 class="font-1 black-color m-10px-b m-30px-t">Follow Us</h5>
                                <div class="social-icon si-30 theme radius nav">
                                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php $this->load->view('sojib/main/footer'); ?>
    <script src="https://www.sobujpatagroup.com/assets/common/js/jquery.min.js"></script>
    <script src="https://www.sobujpatagroup.com/assets/common/js/bootstrap.min.js"></script>
</body>

</html>