<div class="container">
    <div class="content">

        <div class="card">
            <div class="card-header">
                <center>
                    ADMIN SAMLEKUM
                </center>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md4" style="margin-left: auto; margin-right: auto;">
                            <?php foreach ($admin as $adm) : ?>
                                <center>
                                    <i class="fas fa-users-cog fa-10x" style="border-radius: 50%;"></i>
                                    <br>
                                    <br>
                                    <h5>Username : <?= $adm['username']; ?></h5>
                                    <h5>Password : <?= $adm['password']; ?></h5>
                                    <br>
                                    <a class="btn btn-primary btn-sm" href="<?= base_url('admin/edit/'); ?><?= $adm['id_admin']; ?>">EDIT</a>
                                </center>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>