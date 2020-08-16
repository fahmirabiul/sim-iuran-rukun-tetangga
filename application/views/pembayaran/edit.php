<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= base_url('pembayaran/edit'); ?>" method="post">
                    <div class="form-group">
                        <label for="id_pmb">Id Pembayaran</label>
                        <input type="text" class="form-control" id="id_pmb" name="id_pmb" value="<?= $pembayaran['id_pmb']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $pembayaran['nik']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="id_iuran">Id Iuran</label>
                        <input type="text" class="form-control" id="id_iuran" name="id_iuran" value="<?= $pembayaran['id_iuran']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_iuran">Nama Iuran</label>
                        <input type="text" class="form-control" id="nama_iuran" name="nama_iuran" value="<?= $pembayaran['nama_iuran']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="biaya_iuran">Biaya Iuran</label>
                        <input type="text" class="form-control" id="biaya_iuran" name="biaya_iuran" value="<?= $pembayaran['biaya_iuran']; ?>" readonly>
                    </div>
                    <div class=" form-group">
                        <label for="tanggal_pmb">Tanggal Pembayaran</label>
                        <input type="date" class="form-control" id="tanggal_pmb" name="tanggal_pmb" value="<?= $pembayaran['tanggal_pmb']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="status_pmb">Status Pembayaran:</label>
                        <select class="form-control" id="status_pmb" name="status_pmb">
                            <option>Belum Dibayar</option>
                            <option>Telah Dibayar</option>
                        </select>
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary btn-sm float-right ml-3">Edit Data </button>
                    <a href="<?= base_url('pembayaran'); ?>" class=" btn btn-primary btn-sm float-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>