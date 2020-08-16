<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= base_url('warga/edit'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nik">Nomor Induk Keluarga</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $warga['nik']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $warga['nama']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $warga['alamat']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="nohp">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $warga['nohp']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $warga['username']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?= $warga['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <input type="hidden" name="namafoto" id="namafoto" value="<?= $warga['foto']; ?>">
                    <button type="submit" name="edit" class="btn btn-primary btn-sm float-right ml-3">Edit Data </button>
                    <a href="<?= base_url('warga'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
                </form>
            </div>
            <div class="col-md-4">
                <img src="<?= base_url('assets/foto/'); ?><?= $warga['foto']; ?>" width="200" height="200" class="float-right" style="border-radius: 50%;">
            </div>
        </div>
    </div>
</div>