$(document).ready(function(){

    $("#btnConsulta").click(function(){
        $.ajax({
            url:"consulta.php",
            type:"POST",
            async: true,
            dataType: 'json',
            success:function(data,textStatus, status){
                console.log(textStatus);
                console.log(status);
                console.log(data);
            },
            error: function(xhr, textStatus, error) {
                console.log(xhr.responseText);
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            }
        })
    });
});

