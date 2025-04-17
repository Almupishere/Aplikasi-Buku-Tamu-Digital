<div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= site_url('Admin/update/' . $row['id']) ?>">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="editModalLabel<?= $row['id'] ?>">Edit Data Buku Tamu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Instansi</label>
                    <input type="text" name="instansi" class="form-control" value="<?= $row['instansi'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Keperluan</label>
                    <input type="text" name="keperluan" class="form-control" value="<?= $row['keperluan'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Tanggal Kunjungan</label>
                    <input type="date" name="tanggal_kunjungan" class="form-control" value="<?= $row['tanggal_kunjungan'] ?>" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </div>
    </form>
  </div>
</div>
