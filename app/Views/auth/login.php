<?= $this->extend('layout/template-auth'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row justify-content-center ">
        <div class="col-sm-5 ">
            <div class="login-wrapper shadow-sm">
                <h1 class="login-tiitle d-inline">
                    Masuk
                </h1>
                <p>Simulasi Pembelajaran Matematika SMP</p>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus placeholder="admin@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <input type="submit" class="btn btn-materi" value="Masuk">
                </form>
            </div>
            <div class="mt-3" style="text-align: center;">
                <a href="../" class="btn-mulai shadow-sm posisi-tombol">Beranda</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>