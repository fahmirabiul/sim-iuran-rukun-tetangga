<div class="container">

    <div class="content">

        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Pembayaran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari berdasarkan nama" name="keynama" autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <input class="btn btn-secondary" type="submit" name="submit" value="Cari">
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <!-- <th scope="col">Id Pembayaran</th> -->
                    <th scope="col">Nama</th>
                    <th scope="col">Id Iuran</th>
                    <th scope="col">Nama Iuran</th>
                    <th scope="col">Tanggal Pembayaran</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($pembayaran as $pmb) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <!-- <td><?= $pmb['id_pmb']; ?></td> -->
                        <td><?= $pmb['nama']; ?></td>
                        <td><?= $pmb['id_iuran']; ?></td>
                        <td><?= $pmb['nama_iuran']; ?></td>
                        <td><?= $pmb['tanggal_pmb']; ?></td>
                        <td>
                            <?php
                                $status = $pmb['status_pmb'];
                                if ($status == 'Telah Dibayar') {
                                    echo "<font color='green'>$status</font>";
                                } else {
                                    echo "<font color='red'>$status</font>";
                                }
                                ?>
                        </td>
                        <td>
                            <a class="" href="<?= base_url('pembayaran/edit/') ?><?= $pmb['id_pmb']; ?>"><span class="badge badge-success">Detail</span></a>
                            <a class="" href="<?= base_url('pembayaran/hapus/'); ?><?= $pmb['id_pmb']; ?>"><span class="badge badge-danger">Hapus</span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>