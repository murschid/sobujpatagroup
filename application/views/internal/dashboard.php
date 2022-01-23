<div class="content-wrapper">
    <?php $this->load->view($header[0]); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-cog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">CPU Traffic</span>
                            <span class="info-box-number"><?= $this->benchmark->elapsed_time(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-save"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Memory</span>
                            <span class="info-box-number"><?= $this->benchmark->memory_usage(); ?></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-server"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Online</span>
                            <span class="info-box-number"><?= mycrypt::totalcount('tb_online', array()); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Visitors</span>
                            <span class="info-box-number"><?= mycrypt::totalcount('tb_visitors', array()); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                            <tr>
                                                <td><a href="<?= base_url('admin/dashboard.html'); ?>">OR9842</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="<?= general::badge(); ?> badges">Shipped</span></td>
                                                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                                <td>2020-03-20 10:35pm</td>
                                            </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="<?= base_url('admin/contact.html');?>" class="btn btn-sm btn-info float-right text-white">View All Orders</a>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('internal/chatting'); ?>
            </div>
            <?php $this->load->view('internal/maps'); ?>
        </div>
    </div>
</div>