<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Dashboard</h1>

<!-- flash message -->
<div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>

<?php

if ($role == 1) {
    echo $this->include('dashboard/dashboard-admin');
} else if ($role == 2) {
    echo $this->include('dashboard/dashboard-teacher');
} else if ($role == 3) {
    echo $this->include('dashboard/dashboard-student');
}

?>