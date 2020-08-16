<div class="container">

    <div class="content">

        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Iuran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-4">
                <form action="<?= base_url('iuran'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="tahun+bulan (ex. 1912)" name="keyword" autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <input class="btn btn-secondary" type="submit" name="submit" value="Cari">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Bulan</th>
                    <th scope="col">Nama Iuran</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($iuran as $ir) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $ir['id_iuran']; ?></td>
                        <td><?= $ir['tahun']; ?></td>
                        <td><?= $ir['bulan']; ?></td>
                        <td><?= $ir['nama_iuran']; ?></td>
                        <td><?= $ir['biaya_iuran']; ?></td>
                        <td>
                            <a class="mr-2" href="<?= base_url('iuran/edit/'); ?><?= $ir['id_iuran']; ?>"><i class="fas fa-edit"></i></a>
                            <a class="" href="<?= base_url('iuran/hapus/'); ?><?= $ir['id_iuran']; ?>"><i class="fas fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>