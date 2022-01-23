<section class="section bg-center bg-cover effect-section" style="background-image: url(<?= base_url('assets/external/img/common/' . $intro['image']); ?>);">
    <div class="mask theme-bg opacity-6"></div>
    <div class="container">
        <div class="row justify-content-center p-50px-t">
            <div class="col-lg-8 text-center">
                <h2 class="white-color m-20px-b text-uppercase"><?= $intro['text']; ?></h2>
                <ol class="breadcrumb white justify-content-center">
                    <li><a href="<?= base_url('home.html'); ?>">Home</a></li>
                    <li class="active"><?= $intro['text']; ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>