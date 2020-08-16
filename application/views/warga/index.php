<div class="container">

  <div class="content">

    <?php if ($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Warga <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="row">
      <div class="col-md-4">
        <form action="<?= base_url('warga'); ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="NIK / Kepala Keluarga" name="keyword" autocomplete="off" autofocus>
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
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nomor Handphone</th>
          <th scope="col">username</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($warga as $wa) : ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $wa['nik']; ?></td>
            <td><?= $wa['nama']; ?></td>
            <td><?= $wa['alamat']; ?></td>
            <td><?= $wa['nohp']; ?></td>
            <td><?= $wa['username']; ?></td>
            <td>
              <a class="mr-2" href="<?= base_url('warga/edit/'); ?><?= $wa['nik']; ?>"><i class="fas fa-edit"></i></a>
              <a class="" href="<?= base_url('warga/hapus/'); ?><?= $wa['nik']; ?>"><i class="fas fa-trash text-danger"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>