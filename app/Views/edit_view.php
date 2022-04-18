<div class="container p-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="post" method="post" action="<?= base_url('barang/update'); ?>">
                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" value="<?= $barang->nama_barang; ?>" name="nama" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Qty</label>
                    <input type="number" value="<?= $barang->qty; ?>" name="qty" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <input type="number" value="<?= $barang->harga_beli; ?>" name="beli" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="number" value="<?= $barang->harga_jual; ?>" name="jual" class="form-control" required class="form-control">
                </div>
                <input type="hidden" value="<?= $barang->id_barang; ?>" name="id_barang">
                <button class="btn btn-success">Edit Data</button>
            </form>

        </div>
    </div>
</div>