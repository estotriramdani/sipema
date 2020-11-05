<?= $this->include('layout/sidebar'); ?>

<!-- Page Content -->
<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <?= $this->renderSection('content'); ?>
      </div>
    </div>
  </div>
</div>
<!-- /#page-content-wrapper -->

<?= $this->include('layout/footer-dashboard'); ?>