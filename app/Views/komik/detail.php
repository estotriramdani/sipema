<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['penulis']; ?></h5>
                            <p class="card-text"><b>Penulis: </b><?= $komik['penulis']; ?>
                            </p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit: </b> <?= $komik['penerbit']; ?></small></p>
                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form class="d-inline" action="/komik/<?= $komik['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name"_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                            </form>
                            <br>
                            <a href="/komik">Kembali ke Daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>