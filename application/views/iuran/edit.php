<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= base_url('iuran/edit'); ?>" method="post">
                    <div class="form-group">
                        <label for="id_iuran">Id Iuran</label>
                        <input type="text" class="form-control" id="id_iuran" name="id_iuran" value="<?= $iuran['id_iuran']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $iuran['tahun']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="bulan">Bulan</label>
                        <input type="text" class="form-control" id="bulan" name="bulan" value="<?= $iuran['bulan']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="nama_iuran">Nama Iuran</label>
                        <input type="text" class="form-control" id="nama_iuran" name="nama_iuran" value="<?= $iuran['nama_iuran']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="biaya_iuran">Biaya</label>
                        <input type="text" class="form-control" id="biaya_iuran" name="biaya_iuran" value="<?= $iuran['biaya_iuran']; ?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary btn-sm float-right ml-3">Edit Data </button>
                    <a href="<?= base_url('iuran'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>