<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <input type="hidden" name="id_admin" value="<?= $admin['id_admin']; ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $admin['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?= $admin['password']; ?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary btn-sm float-right ml-3">Edit Data </button>
                    <a href="<?= base_url('admin'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>