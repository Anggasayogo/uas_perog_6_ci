<div class="container pt-5">
    <div class="container px-1">
        <form action="<?= base_url('perpustakaan/search'); ?>" method="POST" class="row gx-5">
            <div class="col">
                <div class="input-group mb-3">
                  <input name="keyword" type="text" class="form-control" placeholder="Input Keyword" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col">
                <input type="submit" value="Search" class="btn btn-success mb-2">
            </div>
        </form>
    </div>
    <div class="card">
        <!-- <div class="card-header bg-primary text-white">
            <h4 class="card-title">Data Peminjam Buku</h4>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Siswa</th>
                            <th>Meminjam</th>
                            <th>Kembali</th>
                            <th>Buku</th>
                            <th>Jumlah Halaman</th>
                            <th>Penulis</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                        foreach ($data as $item) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $item['siswa']; ?></td>
                                <td><?= $item['tgl_pinjam']; ?></td>
                                <td><?= $item['tgl_kembali']; ?></td>
                                <td><?= $item['nama_buku']; ?></td>
                                <td><?= $item['jmlh_halaman']; ?></td>
                                <td><?= $item['penulis']; ?></td>
                                <td><?= $item['tgl_kembali']; ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>