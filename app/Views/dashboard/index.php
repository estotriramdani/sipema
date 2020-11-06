<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Dashboard</h1>

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