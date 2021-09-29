<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data Karyawan
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?= base_url('aksi-edit-pembayaran') ?>" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ID Karyawan</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?= $karyawan['id_karyawan']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?= $karyawan['nama']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK Karyawan</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?= $karyawan['nikkaryawan']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?= $karyawan['email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Posisi</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="<?= $karyawan['posisi']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <a href="<?= base_url(); ?>karyawan" class="btn btn-primary">Kembali</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>