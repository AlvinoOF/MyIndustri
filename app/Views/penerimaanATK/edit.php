<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mt-3 mb-4 text-gray-800">Edit Penerimaan ATK</h1>

    <form action="/penerimaanatk/update/<?= $penerimaanatk->id_det_penerimaan; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="hidden" class="form-control" value="<?= $penerimaanatk->id_det_pemesanan; ?>" name="id_det_pemesanan">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $penerimaanatk->jumlah; ?>" name="jumlah">
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Update</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>