$(function() {
   
    $(".form-control").on('focus', function(){

        $(this).parents(".form-group").addClass('focused');

    });

    $(".form-control").on('blur', function(){

        $(this).parents(".form-group").removeClass('focused');

    });

});

function checkEmail ()

{ 
    var x = document.forms.namedItem("email").innerHTML; 
    var y = document.forms.namedItem("email-confirm").innerHTML; 

    let confirmation = "Email verified"


    if (x == y) { 
        console.log(confirmation)
    }

    else { 
        confirmation = "Please confirm email and try again"
    }
    document.getElementById("error").innerHTML = confirmation;
}