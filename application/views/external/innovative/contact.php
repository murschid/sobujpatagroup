<section id="contact" class="row md-m-25px-b m-45px-b justify-content-center text-center">
    <div class="col-lg-12">
        <h3 class="p-20px-b theme-after after-50px text-uppercase">Don't hesitate to contact us</h3>
        <p class="m-0px font-2">Contact to us any time through our website, we will try to reply instantly.</p>
    </div>
    <?php if ($this->session->flashdata('errors')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('errors'); ?></div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>
</section>
<section class="section parallax" style="background-image: url(<?= base_url('assets/external/img/common/bg-2.jpg'); ?>);background-size:contain;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <h3 class="h1 white-color m-20px-b p-20px-b white-after after-50px">let's start working together-</h3>
            </div>
            <div class="col-lg-6">
                <div class="p-20px white-bg box-shadow">
                    <h5 class="m-15px-b">Send A Message</h5>
                    <?= form_open('home/contactus'); ?>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" required minlength="3" maxlength="30" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required minlength="6" maxlength="40" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required minlength="3" maxlength="100" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="2" required minlength="3" maxlength="5000" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-action">
                        <button class="m-btn m-btn-sm m-btn-theme m-btn-radius" type="submit" name="send">Get in touch</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>