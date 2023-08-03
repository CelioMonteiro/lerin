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
    url: "http://localhost/lerin/php/listaClientes.php?idUser="+idUser,
    contentType: false,
    cache: false,
    dataType: "json",
    data: datas,
    processData:false,
    success: function(retorno){
        console.log(retorno);
        for(var i = 0; i<retorno.length; i++){
            
            var nome        = retorno[i].nome;
            var telefone    = retorno[i].telefone;
            var email       = retorno[i].email;
            var endereco    = retorno[i].endereco;
            document.getElementById("listaClientes").innerHTML += '<tr><td>'+nome+'</td><td>'+email+'</td><td>'+telefone+'</td><td class="text-right"><a href="">editar</a></td></tr>';
        }
       
    },
      error: function(xhr, status, error) {
      alert('erro')
      alert(xhr.responseText);
    }
  }); 
/*
  $.ajax({
    type: "GET",
    url: "http://localhost/lerin/php/listaClientes.php?idUser="+idUser,
    contentType: false,
    cache: false,
    dataType: "json",
    data: datas,
    processData:false,
    success: function(retorno1){
        console.log(retorno1);
        for(var i = 0; i<retorno1.length; i++){
            

            var idUser      = retorno1[i].idUser;
            var nome        = retorno1[i].nome;
            var telefone    = retorno1[i].telefone;
            var email       = retorno1[i].email;
            var endereco    = retorno1[i].endereco;
            
            document.getElementById("idCliente").innerHTML += ' <option value="'+idUser+'">'+nome+'</option>';
        }
       
    },
      error: function(xhr, status, error) {
      alert('erro')
      alert(xhr.responseText);
    }
  }); 
  */