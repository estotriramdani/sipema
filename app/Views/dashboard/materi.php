<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

Materi
<?= $this->endSection(); ?>




<?php



echo $this->include('dashboard/materi/bangundatar');

echo $this->include('dashboard/materi/himpunan');

// echo $this->include('dashboard/materi/himpunan');


?>