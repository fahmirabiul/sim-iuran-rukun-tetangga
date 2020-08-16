<div class="container">
    <div class="content">
        <div class="col-md-6">
            <form action="<?= base_url('pembayaran/tambah'); ?>" method="post">
                <div class="form-group">
                    <label for="nik">nik</label>
                    <input type="number" class="form-control" id="nik" name="nik" value="">
                </div>
                <div class="form-group">
                    <label for="id_iuran">Id Iuran</label>
                    <input type="number" class="form-control" id="id_iuran" name="id_iuran" value="">
                </div>
                <div class=" form-group">
                    <label for="tanggal_pmb">Tanggal Pembayaran</label>
                    <input type="date" class="form-control" id="tanggal_pmb" name="tanggal_pmb" value="">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary btn-sm float-right ml-3">Tambah Data </button>
                <a href="<?= base_url('pembayaran'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
            </form>
        </div>
    </div>
</div>