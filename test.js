//au load de la page
$(document).ready(function () {
    $("myForm input.style1").click(function (event) {
        event.preventDefault();
        console.log('click ! ');

        var name = $("myform #contact-name").val();
        var email = $("myform #contact-email").val();
        var message =  $("myform #contact-message").val();

        //appel ajax
        $.ajax({
            url:'emailThis.php',
            method:'POST',
            data:{name: name, email: email, message: message}
        })
    })
})