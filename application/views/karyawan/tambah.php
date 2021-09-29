<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nikkaryawan">NIK Karyawan</label>
                            <input type="text" name="nikkaryawan" class="form-control" id="nikkaryawan">
                            <small class="form-text text-danger"><?= form_error('nikkaryawan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <select class="form-control" id="posisi" name="posisi">
                                <option value="Staff">Staff</option>
                                <option value="HRD">HRD</option>
                                <option value="Manager">Manager</option>
                                <option value="Office Boy">Office Boy</option>
                                <option value="Sales">Sales</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>