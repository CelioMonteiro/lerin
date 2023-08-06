<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Lerin ADMIN - Cliente
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav" id="listarMenu">
         
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Administação de clientes</a>
            <button class="btn btn-primary btn-round" onclick="verformCliente()" id="BtnNovo">Novo</button>
            <button class="btn btn-primary btn-round" onclick="verListagemClientes()" id="BtnListagem" style="display: none;">Listagem</button>
            
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row" id="form_cliente" style="display:block;">
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Cliente</h5>
              </div>
              <div class="card-body">
                <form action="#" id="editarCliente" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Representante</label>
                        
                        <div id="mostraUser"></div>
                        <div id="idcliente"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 pr-1">
                        <div class="form-group">
                          <label>Nome</label>
                          <div id="nome"></div>
                          
                        </div>
                      </div>
                      <div class="col-md-8 pr-1">
                          <div class="form-group">
                            <label>Descrição</label>
                            <div id="descricao"></div>
                            
                          </div>
                      </div>
                      <div class="col-md-8 pr-1">
                          <div class="form-group">
                            <label>Preço</label>
                            <div id="preco"></div>
                            
                          </div>
                      </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Quantidade</label>
                          <div id="quantidade"></div>
                          
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input type="submit" class="btn btn-primary btn-round" value="Enviar"/>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/form-ajax.js"></script>
 
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
  <script>
    function mostrarDadosCliente()
    {
      var query = location.search.slice(1);
      var partes = query.split('&');
      var datas = {};
      partes.forEach(function (parte) {
        var chaveValor = parte.split('=');
        var chave = chaveValor[0];
        var valor = chaveValor[1];
        datas[chave] = valor;
      });

      var idCliente = datas.idCliente
      var idUser = datas.idUser

      $.ajax({
          type: "GET",
          url: "http://localhost/Slerin/lerin/php/listaClienteUnico.php?idCliente="+idCliente+"&idUser="+idUser,
          contentType: false,
          cache: false,
          dataType: "json",
          data: datas,
          processData:false,
          success: function(retorno){
              console.log(retorno);
              for(var i = 0; i<retorno.length; i++){
                  
                  let idProduto    = retorno[i].idProduto
                  let nome         = retorno[i].nome_produto; 
                  var descricao    = retorno[i].descricao;
                  var preco        = retorno[i].preco;
                  var quantidade   = retorno[i].quantidade;
                  
                  document.getElementById('nome').innerHTML = '<input type="text" class="form-control" placeholder="Nome do produto" name="nome_produto" value="'+nome+'">'
                  document.getElementById('descricao').innerHTML = '<input type="text" class="form-control" placeholder="Descrição" name="descricao" value="'+telefone+'">'
                  document.getElementById('preco').innerHTML = '<input type="number" class="form-control" placeholder="preco" name="preco" value="'+preco+'">'
                  document.getElementById('quantidade').innerHTML = '<input type="number" class="form-control" name="quantidade" value="'+quantidade+'">'
                  document.getElementById('idProduto').innerHTML = '<input type="hidden" name="idProduto" value="'+idProduto+'" >' 
              }
            
          },
            error: function(xhr, status, error) {
            alert('erro')
            alert(xhr.responseText);
          }
        }); 

    }
    mostrarDadosCliente()
  </script>
   <script>
    function mostrarNomeRepresentante()
    {
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
          url: "http://localhost/Slerin/lerin/php/listaUser.php?idUser="+idUser,
          contentType: false,
          cache: false,
          dataType: "json",
          data: datas,
          processData:false,
          success: function(retorno){
              console.log(retorno);
              for(var i = 0; i<retorno.length; i++){
                  
                  let primeiro_nome = retorno[i].primeiro_nome; 
                  var segundo_nome  = retorno[i].segundo_nome;
                  var telefone    = retorno[i].telefone;
                  var email       = retorno[i].email;
                  document.getElementById("mostraUser").innerHTML += '<input type="text" class="form-control" disabled="" placeholder="Company" value="'+primeiro_nome+'"><input type="hidden" value="'+idUser+'" name="idRepresentante" />';
              }
            
          },
            error: function(xhr, status, error) {
            alert('erro')
            alert(xhr.responseText);
          }
        }); 

    }
    mostrarNomeRepresentante()
  </script>
  <script>
    function motrarMenu()
    {
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
  
      document.getElementById("listarMenu").innerHTML += '<li><a href="../../web"><i class="nc-icon nc-paper"></i><p>Site</p></a></li><li class="active"><a href="./criar_cliente.html?idUser='+idUser+'"><i class="nc-icon nc-single-02"></i><p>Clientes</p></a></li><li><a href="./criar_venda.html?idUser='+idUser+'"><i class="nc-icon nc-single-copy-04"></i><p>Venda</p></a></li><li><a href="./criar_produto.html?idUser='+idUser+'"><i class="nc-icon nc-bag-16"></i><p>Produto</p></a></li>'
    }
    motrarMenu()
  </script>
</body>

</html>