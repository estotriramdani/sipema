<?= $this->section('content'); ?>


<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-pause="true">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non voluptate perferendis beatae soluta error labore harum facere blanditiis cumque veniam repudiandae illo, magnam quae modi! Amet magni non aspernatur earum!</p>
        </div>
        <div class="carousel-item" data-interval="2000">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio possimus libero exercitationem unde, incidunt quos, cumque itaque distinctio eos voluptatem voluptates natus saepe, perspiciatis error quod molestiae ipsa enim. Cumque?</p>
        </div>
        <div class="carousel-item">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio possimus libero exercitationem unde, incidunt quos, cumque itaque distinctio eos voluptatem voluptates natus saepe, perspiciatis error quod molestiae ipsa enim. Cumque?</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?= $this->endSection(); ?>