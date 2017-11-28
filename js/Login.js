$(document).ready(function(){
    $("#Iniciar").click(function(){
        var Usuario = $('#usuario').val();
        var Contrasena = $('#contrasena').val();
        //console.log(Usuario,Contrasena);
        $ajax({
            type:"POST",
            datatype:'json',
            url:'php/LoginAjax.php',
            data:{Usuario:Usuario,Contrasena:Contrasena},
            success:function(response){
            if(response.)    
            }
        });
    });
});
