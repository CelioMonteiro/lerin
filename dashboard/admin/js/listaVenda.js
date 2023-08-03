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

function nome_cliente()
  {
    $.ajax({
      type: "GET",
      url: "http://localhost/Slerin/lerin/php/listaClientes.php",
      contentType: false,
      cache: false,
      dataType: "json",
      data: datas,
      processData:false,
      success: function(retorno2){
          
          for(var i = 0; i<retorno2.length; i++){
              const nome_cliente        = retorno2[i].nome;

              //document.getElementById("listaVendas").innerHTML += '<tr><td>'+idCliente+'</td><td>'+nome_cliente+'</td><td>'+quantidade+'</td><td class="text-right"><a href="">editar</a></td></tr>';
          }
         
      }
    });

    return nome_cliente 
  }

  function nome_produto()
  {
    $.ajax({
      type: "GET",
      url: "http://localhost/lerin/php/listaProduto.php",
      contentType: false,
      cache: false,
      dataType: "json",
      data: datas,
      processData:false,
      success: function(retorno3){
          
          for(var i = 0; i<retorno3.length; i++){
              const nome_produto        = retorno3[i].nome_produto;
              document.getElementById("listaVendas").innerHTML += '<tr><td>'+nome_cliente+'</td><td>'+nome_produto+'</td><td>'+quantidade+'</td><td class="text-right"><a href="">editar</a></td></tr>';
          }
         
      }
    });
    
    return nome_produto
  }

  $.ajax({
    type: "GET",
    url: "http://localhost/lerin/php/listaVendas.php?idRepresentante="+idUser,
    contentType: false,
    cache: false,
    dataType: "json",
    data: datas,
    processData:false,
    success: function(retorno){
        
        for(var i = 0; i<retorno.length; i++){
           
            const idCliente           = retorno[i].idCliente;
            const idRepresentante     = retorno[i].idRepresentante;
            const idProduto           = retorno[i].idProduto;
            const quantidade          = retorno[i].quantidade;
            const descricao           = retorno[i].descricao;
            const data_cadsatro       = retorno[i].data_cadsatro;

            let nome_cliente = nome_cliente() 
            let nome_produto = nome_produto()
             
            document.getElementById("listaVendas").innerHTML += '<tr><td>'+idCliente+'</td><td>'+idProduto+'</td><td>'+quantidade+'</td><td class="text-right"><a href="">editar</a></td></tr>';
        }
       
    },
      error: function(xhr, status, error) {
      alert('erro')
      alert(xhr.responseText);
    }
  }); 

  
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