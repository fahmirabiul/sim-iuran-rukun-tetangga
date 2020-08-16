<div class="container">
    <div class="content">
        <div class="col-md-6">
            <form action="<?= base_url('iuran/tambah'); ?>" method="post">
                <div class="form-group">
                    <label for="id_iuran">Id Iuran</label>
                    <input type="number" class="form-control" id="id_iuran" name="id_iuran" value="">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" value="">
                </div>
                <div class=" form-group">
                    <label for="bulan">Bulan</label>
                    <input type="text" class="form-control" id="bulan" name="bulan" value="">
                </div>
                <div class=" form-group">
                    <label for="nama_iuran">Nama Iuran</label>
                    <input type="text" class="form-control" id="nama_iuran" name="nama_iuran" value="">
                </div>
                <div class=" form-group">
                    <label for="biaya_iuran">Biaya</label>
                    <input type="number" class="form-control" id="biaya_iuran" name="biaya_iuran" value="">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary btn-sm float-right ml-3">Tambah Data </button>
                <a href="<?= base_url('iuran'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
            </form>
        </div>
    </div>
</div>