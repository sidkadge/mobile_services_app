<?php include(APPPATH . 'Views/header.php'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Enquiry List</h4>
                        <p class="card-description">Recent contact form submissions</p>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Service</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($records)) : ?>
                                        <?php $i = 1; foreach ($records as $row) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= esc($row['name']); ?></td>
                                                <td><?= esc($row['email']); ?></td>
                                                <td><?= esc($row['phone']); ?></td>
                                                <td><?= esc($row['services']); ?></td>
                                                <td><?= esc($row['message']); ?></td>
                                                <td><?= date('d M Y h:i A', strtotime($row['created_at'])); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No enquiries found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include(APPPATH . 'Views/footer.php'); ?>
