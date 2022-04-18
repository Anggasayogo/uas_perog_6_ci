<div class="container pt-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-success mb-2">Data Barang</a>
    <a href="<?= base_url('pelanggan'); ?>" class="btn btn-success mb-2">Data Pelanggan</a>
    <a href="<?= base_url('user'); ?>" class="btn btn-success mb-2">Kelola User Role</a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Data Barang</h4>
        </div>
        <div class="card-body">
            <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getBarang as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama_barang']; ?></td>
                                <td><?= $isi['qty']; ?></td>
                                <td>Rp<?= number_format($isi['harga_beli']); ?>,-</td>
                                <td>Rp<?= number_format($isi['harga_jual']); ?>,-</td>
                                <td>
                                    <a href="<?= base_url('barang/edit/' . $isi['id_barang']); ?>" class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('barang/hapus/' . $isi['id_barang']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" class="btn btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>