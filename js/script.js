$(function(){

    $('#contact-form').submit(function(e){
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json){
                if(json.isSuccess)
                {
                    $("#contact-form").append("<p class='subtitle is-success has-text-centered is-2'><i class='fas fa-check'></i>  Votre message a bien été envoyé !!! Merci</p>");
                    $('#contact-form')[0].reset();
                }
                else
                {
                    $("#name").html(json.nameError);
                    $("#firstname").html(json.nameError);
                    $("#email").html(json.nameError);
                    $("#message").html(json.nameError);
                }
            }
        });
    });
});