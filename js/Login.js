$(document).ready(function(){
    $('#iniciar').click(function(){
        var Usuario = $('#usuario').val();
        var Contrasena = $('#contrasena').val();
        var datosCadena = 'Usuario='+ Usuario + '&Contrasena='+ Contrasena;
        if (Usuario=='' || Contrasena=='') {
            alert("ingrese los datos");
        }else{

        //console.log(Usuario,Contrasena);
        $.ajax({
            //data:{"Usuario" : "usuario" , "Contrasena" : "contrasena"},
            data:$('iniciar').serialize(),
            //data:datosCadena,
            type:"POST",
            datatype:"json",
            url:"php/LoginAjax.php",
            cache:false,
            /*success: function(result){
                alert(result);
            }*/
            success:function(response){
            if(response.respuesta==true){
                $("#mensaje").html(response.mensaje);
                window.location='principal.php';
            }else{
                $("#mensaje").html(response.mensaje);
            }
        },error:function(){
            alert('Error General en el sistema');
        }
        });
        }
    });
});
