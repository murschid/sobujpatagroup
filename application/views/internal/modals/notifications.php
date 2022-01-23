<?php foreach ($messages as $message): ?>
    <a onclick="contactmsg(<?= $message->id; ?>)" class="dropdown-item msgcountcls msghide_<?= $message->id; ?>">
        <div class="media">
            <img src="<?= base_url('assets/internal/img/admin/user' . rand(1, 8) . '-128x128.jpg'); ?>" alt="Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
                <h3 class="dropdown-item-title">Brad Diesel<span class="float-right text-sm <?= general::color(); ?>"><i class="fa fa-star"></i></span></h3>
                <p class="text-sm"><?= substr($message->subject, 0, 20); ?>...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> <?= timespan($message->time, now(), 1); ?></p>
            </div>
        </div>
    </a>
    <div class="dropdown-divider"></div>
<?php endforeach; ?>
<a href="<?= base_url('admin/contact.html'); ?>" class="dropdown-item dropdown-footer">See All Messages</a>