<?php $this->load->view('external/intro'); ?>
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
                    <?php if ($this->session->flashdata('errors')): ?>
                        <div class="alert alert-danger"><?= $this->session->flashdata('errors'); ?></div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                    <?php endif; ?>
                    <?= form_open('home/contactus'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Rachel Roth" required minlength="3" maxlength="30" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="name@email.com" required minlength="6" maxlength="40" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">Subject <span class="text-danger">*</span></label>
                                <input type="text" name="subject" placeholder="Simple quary" required minlength="3" maxlength="100" class="form-control">
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
                    <?= form_close(); ?>
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