<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,500&display=swap" rel="stylesheet">

    <title><?= $tittle; ?></title>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>


    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="js/active-menu-link.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jump.js/dist/jump.min.js"></script>

    <script src="/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

    <script src="/vendor/wow/wow.min.js"></script>

    <script>
        $(".buton").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 100
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    // window.location.hash = hash;
                    // window.location.hash = ;
                });
            } // End if
        });
    </script>
</body>

</html>