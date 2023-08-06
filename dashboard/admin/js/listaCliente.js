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
    url: "http://localhost/Slerin/lerin/php/listaClientes.php?idUser="+idUser,
    contentType: false,
    cache: false,
    dataType: "json",
    data: datas,
    processData:false,
    success: function(retorno){
        console.log(retorno);
        for(var i = 0; i<retorno.length; i++){
            
            var idCliente   = retorno[i].idCliente;
            var nome        = retorno[i].nome;
            var telefone    = retorno[i].telefone;
            var email       = retorno[i].email;
            var endereco    = retorno[i].endereco;
            var data_cadastro =retorno[i].data_cadastro;

            document.getElementById("listaClientes").innerHTML += '<tr><td>'+nome+'</td><td>'+email+'</td><td>'+telefone+'</td><td>'+data_cadastro+'</td><td class="text-right"><a href="editar_cliente.html?idCliente='+idCliente+'&idUser='+idUser+'">editar</a></td></tr>';
        }
       
    },
      error: function(xhr, status, error) {
      alert('erro')
      alert(xhr.responseText);
    }
  }); 
