<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data karyawan.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <?php if (empty($karyawan)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Karyawan Tidak ditemukan.
                </div>
            <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 24.5px">No. </th>
                        <th class="text-center">ID Karyawan</th>
                        <th class="text-center">Nama Karyawan</th>
                        <th class="text-center">NIK Karyawan</th>
                        <th class="text-center">Email Karyawan</th>
                        <th class="text-center">Posisi Karyawan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($karyawan as $mhs) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $mhs['id_karyawan'] ?></td>
                            <td class="text-center"><?= $mhs['nama'] ?></td>
                            <td class="text-center"><?= $mhs['nikkaryawan'] ?></td>
                            <td class="text-center"><?= $mhs['email'] ?></td>
                            <td class="text-center"><?= $mhs['posisi'] ?></td>
                            <td class="text-center">
                                <a class="badge badge-danger float-right tombol-hapus" href="<?= base_url(); ?>karyawan/hapus/<?= $mhs['id_karyawan']; ?>">
                                    Hapus
                                </a>
                                <a class="badge badge-success float-right" href="<?= base_url(); ?>karyawan/ubah/<?= $mhs['id_karyawan']; ?>">
                                    Ubah
                                </a>
                                <a class="badge badge-primary float-right" href="<?= base_url(); ?>karyawan/detail/<?= $mhs['id_karyawan']; ?>">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <a href="<?= base_url(); ?>karyawan/tambah" class="btn btn-primary">Tambah
                Data Karyawan</a>
        </div>
    </div>
</div>