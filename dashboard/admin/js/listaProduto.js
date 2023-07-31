 var query = location.search.slice(1);
var partes = query.split('&');
var datas = {};
partes.forEach(function (parte) {
  var chaveValor = parte.split('=');
  var chave = chaveValor[0];
  var valor = chaveValor[1];
  datas[chave] = valor;
});

var idUser = datas.idUser

$.ajax({
    type: "GET",
    url: "http://localhost/lerin/php/listaProduto.php?idRepresentante="+idUser,
    contentType: false,
    cache: false,
    dataType: "json",
    data: datas,
    processData:false,
    success: function(retorno){
        console.log(retorno);
        for(var i = 0; i<retorno.length; i++){
            console.log(retorno)
            var idProduto           = retorno[i].idProduto;
            var idRepresentante     = retorno[i].idRepresentante;
            var nome_produto        = retorno[i].nome_produto;
            var descricao           = retorno[i].descricao;
            var preco               = retorno[i].preco;
            var data_cadsatro       = retorno[i].data_cadsatro;

            document.getElementById("listagem_produto").innerHTML += '<tr><td>'+idProduto+'</td><td>'+nome_produto+'</td><td>'+preco+'</td><td class="text-right"><a href="">editar</a></td></tr>';
        }
       
    },
      error: function(xhr, status, error) {
      alert('erro')
      alert(xhr.responseText);
    }
  }); 

  
 
