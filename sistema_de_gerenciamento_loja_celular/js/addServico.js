$(function(){
   
    $("#ProdutoAdicionarForm").on("submit", function(){
        var nome = $("#ProdutoNome").val();
        var codigo = $("#ProdutoCodigo").val();
        var valor = $("#ProdutoValorVenda").val();
        var obs = $("#ProdutoObservacoes").val();

        var servico = {
            nome: nome,
            codigo:codigo,
            valor:valor,
            observacao:obs

        }

        if(localStorage["servicos"] == undefined){
            var listaServicos = [servico];
            localStorage["servicos"] = JSON.stringify(listaServicos);
        }else{
            var listaServicos = JSON.parse(localStorage["servicos"]);
            listaServicos.push(servico);
            localStorage["servicos"] = JSON.stringify(listaServicos);

        }

        $("#linhaFormulario").append("<p class='bg-success'>Cadastrado com sucesso<p/>")
        // alert("Cadastrado com sucesso");
    });
   
  


});