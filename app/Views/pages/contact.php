<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, omnis temporibus accusantium sed dolor deserunt delectus perferendis consequatur officiis ex et tempora nisi quia sunt. Expedita repudiandae cum eius explicabo!</p>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>