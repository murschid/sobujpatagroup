<header class="header-nav header-dark header-height">
    <div class="fixed-header-bar gray-bg border-bottom">
        <div class="container">
            <div class="navbar navbar-default navbar-expand-lg main-navbar">
                <div class="navbar-brand">
                    <a href="<?= base_url('home.html'); ?>" class="logo"><img src="<?= base_url('assets/external/img/common/logo.png'); ?>" height="50" alt="Logo"></a>
                </div>
                <div class="navbar-collapse justify-content-end collapse" id="navbar-collapse-toggle">
                    <ul class="nav navbar-nav float-right">
                        <li><a class="nav-link <?= isset($home) ? $home : ''; ?>" href="<?= base_url('home.html'); ?>">Home</a></li>
                        <li><a class="nav-link <?= isset($about) ? $about : ''; ?>" href="<?= base_url('about.html'); ?>">About</a></li>
                        <li><a class="nav-link <?= isset($contact) ? $contact : ''; ?>" href="<?= base_url('contact.html'); ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="extra-menu d-flex align-items-center">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle" aria-expanded="false"><span class="icon-bar"></span></button>
                </div>
            </div>
        </div>
    </div>
</header>