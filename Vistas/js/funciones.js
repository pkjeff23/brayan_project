/*$('#btnguardar').click(function(e){
    //e.preventDefault();
    let datos=$('#frmajax').serialize();
    console.log(datos);
    $.ajax({
        type:"POST",
        url:"controladores/RegistrarEppC.php",
        data:datos,
        dataType: "json",
        success:function(r){
            if(r==1){
                console.log(datos);
                $('#RelementoR').val('');
                //$('#observacionesR').val('');
            }else{
                $('#error').show();
                $('#sucess').hide();
            }
        }
    });

    return false;
});*/

$('#btnguardar').click(function(e){
    let datos = $('#frmajax').serialize();
    //datos = {};
    alert (datos);
    return false;
    $.ajax({
        type: "POST",
        url: "Controladores/RegistrarEppC.php",
        data: JSON.stringify(datos),
        success: function(r){
            if (r==1) {
                alert("guardado exitoso");
            }else{
                alert("No Guardao");
            }
        }
    });
    return false;
});