<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menambahkan Bootstrap Datepicker CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Daftar Kunjungan Buku Tamu</h4>
                <form class="d-flex" method="get" action="">
                    <input type="text" name="tanggal" class="form-control me-2 datepicker" placeholder="Pilih Tanggal" value="<?= $this->input->get('tanggal') ?>">
                    <button class="btn btn-outline-light" type="submit">Filter</button>
                </form>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($admin)): ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($admin as $row): ?>
                                <tr>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['instansi'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                    <td><?= $row['tanggal_kunjungan'] ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">Edit</button>
                                        <a href="<?= site_url('Admin/hapus/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php $this->load->view('home/modal_edit', ['row' => $row]); ?>
                            <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="<?= site_url('home') ?>" class="btn btn-primary mt-3">Kembali ke Form</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Menambahkan Bootstrap Datepicker JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        // Inisialisasi Datepicker
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });
    </script>
</body>

</html>
