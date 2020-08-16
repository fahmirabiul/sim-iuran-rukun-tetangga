<div class="container">
    <div class="content">
        <div class="col-md-6">
            <form action="<?= base_url('warga/tambah'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nik">Nomor Induk Keluarga</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="">
                </div>
                <div class=" form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="">
                </div>
                <div class=" form-group">
                    <label for="nohp">Nomor Handphone</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="">
                </div>
                <div class=" form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="">
                </div>
                <div class=" form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="">
                </div>
                <div class="form-group">
                    <label for="foto">Upload Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <input type="hidden" name="namafoto" value="user_default.jpg">
                <button type="submit" name="tambah" class="btn btn-primary btn-sm float-right ml-3">Tambah Data </button>
                <a href="<?= base_url('warga'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
            </form>
        </div>
    </div>
</div>