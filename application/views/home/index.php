<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Formulir Buku Tamu</h4>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('validation_errors')): ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('validation_errors'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <form method="post" action="<?= site_url('home/tambah') ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap *</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi/Perusahaan</label>
                        <input type="text" class="form-control" name="instansi" id="instansi" value="<?= set_value('instansi') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <textarea class="form-control" name="keperluan" id="keperluan" rows="3"><?= set_value('keperluan') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan *</label>
                        <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" value="<?= set_value('tanggal_kunjungan') ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>
                <a href="<?= site_url('admin') ?>" class="btn btn-primary mt-3">Admin</a>
            </div>
        </div>
    </div>
</body>

</html>