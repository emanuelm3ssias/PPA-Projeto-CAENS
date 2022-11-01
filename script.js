var buscar = document.getElementById("btnBuscar");
buscar.addEventListener('click', enviarDados);

function enviarDados(){
    $.ajax({
        url:"itemHelper.php",
        type: "POST",
        data:{
            tipo: "buscarItem",
            nome: $("#nome").val()
        },
        success:(resultado)=>{
            itens = JSON.parse(resultado);
            console.log(itens);
        } 

    });

}