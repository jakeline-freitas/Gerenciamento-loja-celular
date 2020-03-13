$(function(){
    if(localStorage["servicos"] != undefined){
        var listaServicos = JSON.parse(localStorage["servicos"]);

        for (const servico of listaServicos) {
            $("tbody").append(" <tr> <td >"+ servico.codigo + "</td> <td>" + servico.nome + "</td><td>" + servico.valor +"</td>"
            + "<td align='center'> <a class='btn btn-info'><em class='fa fa-search'></em></a><a class='btn btn-warning'><em class='fa fa-pencil'></em></a><a class='btn btn-danger excluir' onclick='remove(this)'><em class='fa fa-trash'></em></a></td></tr>" );                                   
                                               
        }
    }
    remove = function(item) {
        var tr = $(item).closest('tr');	
     
        tr.fadeOut(400, function() {
            tr.remove();  
            var listaServicos = JSON.parse(localStorage["servicos"]);
            listaServicos.pop();
            localStorage["servicos"] = JSON.stringify(listaServicos);
            	    
        });	
       
                      
    return false;	  
    };
})