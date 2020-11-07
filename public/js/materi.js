let hash= $(location).attr('href');

console.log(hash)

$('.dropdown-menu').click(function(){
    var menu = $(this).attr('id');
    if(menu == "bangundatar"){
        $('.badan').load('bangundatar.php');						
    }else if(menu == "tentang"){
        $('.badan').load('tentang.php');						
    }else if(menu == "tutorial"){
        $('.badan').load('tutorial.php');						
    }else if(menu == "sosmed"){
        $('.badan').load('sosmed.php');						
    }
});