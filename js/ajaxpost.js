$(document).ready(function() {
    $("#enviar").click(function() {

        var patrimonio = $("#patrimonio");
        var patrimonioPost = patrimonio.val(); 
        var lacre = $("#lacre");
        var lacrePost = lacre.val(); 
        var inmetro = $("#inmetro");
        var inmetroPost = inmetro.val();
        var tipo = $("#tipo");
        var tipoPost = tipo.val();
        var lt_kg = $("#lt_kg");
        var lt_kgPost = lt_kg.val();
        var data_recarga = $("#data_recarga");
        var data_recargaPost = data_recarga.val();
        var prox_recarga = $("#prox_recarga");
        var prox_recargaPost = prox_recarga.val();
        var localizacao = $("#localizacao");
        var localizacaoPost = localizacao.val();
        var validade_extintor = $("#validade_extintor");
        var validade_extintorPost = validade_extintor.val();
        var sinalizacao = $("#sinalizacao");
        var sinalizacaoPost = sinalizacao.val();
        var placas = $("#placas");
        var placasPost = placas.val();

        $("#status").html("<center><img src='imgs/aguarde_g.gif' alt='Enviando'/></center>");

        $.post("php/enviar.php", {patrimonio: patrimonioPost, lacre: lacrePost, inmetro: inmetroPost, tipo: tipoPost, lt_kg: lt_kgPost, data_recarga: data_recargaPost, prox_recarga: prox_recargaPost, localizacao: localizacaoPost, validade_extintor: validade_extintorPost, sinalizacao: sinalizacaoPost, placas: placasPost},
        function(data){
                $("#status").html(data).slideDown();

                $("#patrimonio").val(""); 
                $("#lacre").val(""); 
                $("#inmetro").val("");
                $("#tipo").val("");
                $("#lt_kg").val("");
                $("#data_recarga").val("");
                $("#prox_recarga").val("");
                $("#localizacao").val("");
                $("#validade_extintor").val("");
                $("#sinalizacao").val("");
                $("#placas").val("");
        });
    });
});