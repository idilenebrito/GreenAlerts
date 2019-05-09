<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Green Alert - Sistema de alerta de data</title>
  <link rel="icon" href="Imagens/logo-trans.PNG" type="image/x-icon" />

  <!- Imports -!>
  
  <link rel="stylesheet" type="text/css" href="./css/css-cadastroEmpresa.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  
<!-- Menu  navbar -->
<div class="corpo bccu">
  <!-- <header>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Green Alert</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
       <img src=".\Imagens\logo-menu.png" width="50" height="50" alt="">
         </a>
</nav>


      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ação</a>
              <a class="dropdown-item" href="#">Outra ação</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Algo mais aqui</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Desativado</a>
          </li>
        </ul>
      </div>  
    </header> -->
  
    <div class="topo">
      <div>
        <h2><i class="material-icons">add_circle_outline</i> Cadastro de Empresa</h2>
      </div>
    </div>

    <div class=" flex-center-center">
      <form method="POST" action="./classes/Classes-GA/cadastroEmp.php"><!-- Inicio do formulario -->
        <div class="informacoesesquerda">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="cnpj">CNPJ </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cnpj" id="cnpjJS" placeholder="Infome o CNPJ da empresa">
            </div>

            <div class="form-group col-md-4">
              <label for="numInscricao">Número de Inscrição </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="numInscricao" id="numInscricaoJS" placeholder="Número de inscrição">
            </div>
          </div>

          <div class="form-group">
            <label for="nomeEmpresa">Nome da Empresa </label><span class="asterisco-ver">*</span>
            <input type="text" class="form-control" name="nomeEmpresa" id="nomeEmpresaJS" placeholder="Nome da empresa">

            <label for="nomeFantasia">Nome Fantasia </label><span class="asterisco-ver">*</span>
            <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasiaJS" placeholder="Nome fantasia">
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">  
              <label for="descAtv">Principal atividade </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="descAtv" id="descAtvJS" placeholder="Descrição da principal atividade">
            </div>  

            <div class="form-group col-md-4">
              <label for="telefone">Telefone </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control ttinput" name="telefone" id="telefoneJS" placeholder="Telefone">
            </div>

            <div class="form-group col-md-4">
              <label for="telefoneOpc">Telefone Opcional </label>
              <input type="text" class="form-control ttinput" name="telefoneOpc" id="telefoneOpcJS" placeholder="Telefone Opicional">
            </div>  
          </div>

           

            <div class="form-row">
              <div class="form-group col-md-6"> 
                <label for="responsavel">Responsável </label><span class="asterisco-ver">*</span>
                <input type="text" class="form-control" name="responsavel" id="responsavelJS" placeholder="Responsável">
              </div>

              <div class="form-group col-md-6"> 
                <label for="email">E-mail </label><span class="asterisco-ver">*</span>
                <input type="email" class="form-control" name="email" id="emailJS" placeholder="E-mail">
              </div>  
            </div>  
          
          
            <div class="form-group">

              <label for="Endereco">Endereço </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="endereco" id="enderecoJS" placeholder="Endereço">
            </div>

          <div class="form-row df">

            <div class="form-group col-md-2">
              <label for="numero">Número </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="numero" id="numeroJS" placeholder="Número">
            </div>

            <div class="form-group col-md-3">
              <label for="bairro">Bairro </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="bairro" id="bairroJS" placeholder="Bairro">
            </div>

            <div class="form-group col-md-3">
              <label for="cidade">Cidade </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cidade" id="cidadeJS" placeholder="Cidade">
            </div>

            <div class="form-group col-md-2">
              <label for="cep">CEP </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cep" id="cepJS" placeholder="CEP">
            </div>

            <div class="form-group col-md-2">
              <label for="uf">UF </label> <span class="asterisco-ver">*</span>
              <select class="form-control" name="uf" id="ufJS">
                <option>--Selecione--</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="ES">ES</option>
                <option value="DF">DF</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
              </select>
            </div>  
          </div>  


          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="senha">Senha </label><span class="asterisco-ver">*</span>
              <input type="password" name="senha" class="form-control" id="senhaJS" placeholder="Senha">
            </div>
            <div class="form-group col-md-4">
              <label for="confSenha">Confirmar senha </label>
              <input type="password" name="confSenha" class="form-control" id="confSenhaJS" placeholder="Confirmar senha">
            </div>
          </div>

          
          <div class="form-group buttons">
            <input type="submit" value="Cancelar" class="btn btn-outline-danger buttons">
            <input type="submit" value="Adicionar" class="btn btn-success buttons">           
          </div>

        </div>
      </form>
    </div>
  </div>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>