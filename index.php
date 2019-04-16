
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Green Alert - Sistema de alerta de data</title>

<form method="POST" action="cadastroEmp.php">
  <div class= "form-group">
    <label for="cnpj">CNPJ</label>
    <input type="text" class="form-control" id="cnpj" placeholder="Infome o CNPJ da empresa">
  </div>
  
  <div class="form-group">
    <label for="numInscricao">Número de Inscrição</label>
    <input type="text" class="form-control" id="numInscricao" placeholder="Número de inscrição">
  </div>
  
  <div class="form-group">
    <label for="nomeEmpresa">Nome da Empresa</label>
    <input type="text" class="form-control" id="nomeEmpresa" placeholder="Nome da empresa">
  </div>
  
  <div class="form-group">
    <label for="nomeFantasia">Nome Fantasia</label>
    <input type="email" class="form-control" id="nomeFantasia" placeholder="Nome fantasia">
  </div>
  
  <div class="form-group">
    <label for="Endereco">Endereço</label>
    <input type="text" class="form-control" id="Endereco" placeholder="Endereço">
  </div>
  
  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" placeholder="Bairro">
  </div>
  
  <div class="form-group">
    <label for="bairro">Cidade</label>
    <input type="text" class="form-control" id="cidade" placeholder="Cidade">
  </div>
  
  <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" placeholder="CEP">
  </div>
  
  <div class="form-group">
    <label for="uf">UF</label>
    <input type="text" class="form-control" id="uf" placeholder="UF">
  </div>
  
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" placeholder="Telefone">
  </div>
  
  
  <div class="form-group">
    <label for="telefoneOpc">Telefone Opcional</label>
    <input type="text" class="form-control" id="telefoneOpc" placeholder="Telefone">
  </div>
  
  <div class="form-group">
    <label for="descAtv">Principal atividade</label>
    <input type="text" class="form-control" id="descAtv" placeholder="Descrição da principal atividade">
  </div>
  
  <div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" id="responsavel" placeholder="E-mail">
  </div>

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" id="email" placeholder="E-mail">
  </div>
  
  <div class="form-group">
    <label for="senha">Senha<label>
    <input type="text" class="form-control" id="senha" placeholder="Senha">
  </div>
  
  <div class="form-group">
    <label for="confSenha">Confirmar Senha</label>
    <input type="text"  class="form-control" id="confSenha" placeholder="Confirmar senha">
	
  </div>

  <button type="button" class="btn btn-outline-danger">Cancelar</button>
  <button type="submit" class="btn btn-success">Cadastrar</button>

</form>
