
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!- Imports -!>
  <link rel="stylesheet" href="./css/css-cadastroEmpresa.css">   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="corpo width100">
  <div class="cadEmpresa">
    <header><h3>Cadastro de Empresa</h3></header>    
  </div>
  <div class="informacoes flex-center-center">
    <div class="informacoesesquerda">
     <p><strong>CNPJ*</strong></p>
     <input type="text" name="cnpj" size="45">
     <p><strong>Nome da Empresa*</strong></p>
     <input type="text" name="nomeEmp" size="45">
     <p><strong>Endereço*</strong></p>
     <input type="text" name="endereco" size="45">
    <div class="tt">
      <p><strong>Telefone*</strong>
      <p><strong>Telefone Opcional</strong>
   </div>
   <div class="ttinput">
     <input type="text" name="telefone" size="18">
    <input type="text" name="telefoneop" size="18">
      </div>
     <p><strong>Descrição principal da atividade</strong></p>
     <input type="text" name="descricao" size="45"> 
     <p><strong>Email</strong></p>
     <input type="text" name="email" size="45"> 
      </div>
    <div class="informacoesdireita">
    <p><strong>Número de Inscrição*</strong></p>
    <input type="text" name="nInsc" size="62">
   <p><strong>Nome Fantasia</strong></p>
  <input type="text" name="nomeFan" size="62"> 
  <div class="bccu">
    <p><strong>Bairro*</strong>
    <p><strong>Cidade*</strong>
    <p><strong>CEP*</strong>
    <p><strong>UF*</strong>
   </div>
   <div class="bccuinput">
    <input type="text" name="bairro" size="10">
    <input type="text" name="cidade" size="10">
         <input type="text" name="cep" size="10">
         <input type="text" name="uf" size="10">
      </div>
   <p><strong>Responsável</strong></p>
  <input type="text" name="nomeFan" size="62">
      <div class="confemail">
          <p><strong>Confirmar Email</strong></p>
     <input type="text" name="confemail" size="62">
      </div>
  </div>
 </div>
</div> 


</body>
</html>
  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>