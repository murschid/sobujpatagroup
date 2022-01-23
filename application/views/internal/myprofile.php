<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile &nbsp;&nbsp;<a href="<?= base_url('admin/addmoderator.html'); ?>"><button type="button" class="btn btn-sm btn-danger">Add New</button></a></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard.html'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-info card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/internal/img/admin/' . $profile->photo); ?>" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $profile->name; ?></h3>
                            <p class="text-muted text-center"><?= $profile->profession; ?></p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item"><b>Followers</b> <a class="float-right">1,322</a></li>
                                <li class="list-group-item"><b>Friends</b> <a class="float-right">13,287</a></li>
                            </ul>
                            <a href="<?= $profile->facebook; ?>" target="_blank" class="btn btn-info btn-block"><b>Follow</b></a>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header"><h3 class="card-title">About Me</h3></div>
                        <div class="card-body">
                            <strong><i class="fa fa-book mr-1"></i> Education</strong>
                            <p class="text-muted"><?= $profile->education; ?></p><hr>
                            <strong><i class="fa fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted"><?= $profile->location; ?></p><hr>
                            <strong><i class="fa fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                <?php $skills = explode(',', $profile->skills); ?>
                                <?php foreach ($skills as $skill): ?>
                                    <span class="<?= general::badge(); ?>"><?= $skill; ?></span>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-info card-outline">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="settings">
                                    <?= form_open_multipart('action/update_moderator'); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name & Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" name="name" value="<?= $profile->name; ?>" class="form-control" required="" minlength="3" maxlength="30">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="email" value="<?= $profile->email; ?>" class="form-control" required="" readonly="" minlength="9" maxlength="30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Profession & Skills <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" name="profession" value="<?= $profile->profession; ?>" class="form-control" required="" minlength="3" maxlength="100">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" name="skills" value="<?= $profile->skills; ?>" class="form-control" required="" minlength="3" maxlength="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Education & Location <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" name="education" value="<?= $profile->education; ?>" class="form-control" required="" minlength="3" maxlength="100">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" name="location" value="<?= $profile->location; ?>" class="form-control" required="" minlength="3" maxlength="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">About <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <textarea type="text" name="about" class="form-control" required="" minlength="10" maxlength="500"><?= $profile->about; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">FB & Photo <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" name="facebook" class="form-control" value="<?= $profile->facebook; ?>" required="" minlength="14" maxlength="100">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="file" name="photo" class="form-control" required="">
                                                <label class="prophoto"><img class="img-bordered-sm img-size-32" src="<?= base_url('assets/internal/img/admin/' . $profile->photo); ?>" alt="User"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                                <div class="tab-pane" id="activity">
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="<?= base_url('assets/internal/img/admin/' . $profile->photo); ?>" alt="User">
                                            <span class="username">
                                                <a><?= $profile->name; ?></a>
                                            </span>
                                            <span class="description">Posted 5 photos</span>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="img-fluid" src="<?= base_url('assets/internal/img/photo1.png'); ?>" alt="Photo">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" src="<?= base_url('assets/internal/img/photo2.png'); ?>" alt="Photo">
                                                        <img class="img-fluid" src="<?= base_url('assets/internal/img/photo3.jpg'); ?>" alt="Photo">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" src="<?= base_url('assets/internal/img/photo4.jpg'); ?>" alt="Photo">
                                                        <img class="img-fluid" src="<?= base_url('assets/internal/img/photo1.png'); ?>" alt="Photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h5 class="m-0">About</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?= $profile->about; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>