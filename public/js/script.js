$(document).ready(function(){


    $("#checkbox").click(function() {
    if($('#checkbox').is(':checked')){

    $('#country').show();
    $('#city').show();
    }else {



    $('#country').hide();
    $('#city').hide();
    }
    });
    $("#closeLink").click("closeIt");

    $("#country_id").change(function(){
        var id = $(this).val();

        $.getJSON("ajax/get_cities.php", {country_id:id}, function(data){
            console.log(data);
            $("#city_id").html("");
            for(var i=0; i<data.length; i++)
            {
                var o = $("<option></option>").attr("value", data[i].id).text(data[i].name);
                o.appendTo($("#city_id"));

            }
        });
    });

    $("#country_id").change();

    $("#registerForm").submit(function(e){
        e.preventDefault();
        var ime = $("#ime").val();
        var prezime = $("#prezime").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirm = $("#password_confirm").val();
        var country = $("#country_id").val();
        var city = $("#city_id").val();
        console.log($(this).serialize());
        //var ob={ime:ime, prezime:prezime, email:email, password:password, confirm:confirm, country:country, city:city};
        //console.log(ob);
        var jqXHR =$.post("ajax/register.php", $(this).serialize(), function(data){
            console.log(data);
        });
        jqXHR.error(globalAjaxErrors);
        return false;
    });
});
