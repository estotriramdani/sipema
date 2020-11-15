</div>
<!-- /#wrapper -->


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" src="js/active-menu-link.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jump.js/dist/jump.min.js"></script>

<script src="/js/owl.carousel.min.js"></script>

<!-- <script type="text/javascript" src="js/script.js"></script> -->
<!-- custom js -->
<script type="text/javascript" src="js/dashboard.js"></script>
<script type="text/javascript" src="js/materi.js"></script>
<script type="text/javascript" src="js/pojokguru.js"></script>

<script src="/vendor/wow/wow.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelectorAll('.editor')[0])
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelectorAll('.editor')[1])
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>


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
            }, 500, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                // window.location.hash = hash;
                // window.location.hash = ;
            });
        } // End if
    });
</script>
</body>

</html>