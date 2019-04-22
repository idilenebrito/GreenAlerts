
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

    <form method="POST" action="./classes/classes-GA/cadastroEmp.php">

      <div class="informacoesesquerda">

        

        

        <p><strong>CNPJ*</strong></p>
        <input type="text" name="cnpjIn" size="45" placehlder="" name="">
        <p><strong>Nome da Empresa*</strong></p>
        <input type="text" name="nomeEmpIn" size="45" placehlder="" name="">
        <p><strong>Endereço*</strong></p>
        <input type="text" name="enderecoIn" size="45" placehlder="" name="">

        <div class="tt">

          <p><strong>Telefone*</strong>
          <p><strong>Telefone Opcional</strong>

        </div>

        <div class="ttinput">

          <input type="text" name="telefoneIn" size="18" placehlder="">
          <input type="text" name="telefoneOpIn" size="18" placehlder="">
        </div>

        <p><strong>Descrição principal da atividade</strong></p>
        <input type="text" name="descricaoIn" size="45" placehlder="">

        <p><strong>Email</strong></p>
        <input type="text" name="emailIn" size="45" placehlder="">

      </div>

      <div class="informacoesdireita">

        <p><strong>Número Endereço*</strong></p>
        <input type="text" name="nEndIn" size="62" placehlder="">

        <p><strong>Nome Fantasia</strong></p>
        <input type="text" name="nomeFanIn" size="62" placehlder="">

          <div class="bccu">
            <p><strong>Bairro*</strong>
            <p><strong>Cidade*</strong>
            <p><strong>CEP*</strong>
            <p><strong>UF*</strong>
          </div>

          <div class="bccuinput">
            <input type="text" name="bairroIn" size="10" placehlder="">
            <input type="text" name="cidadeIn" size="10" placehlder="">
            <input type="text" name="cepIn" size="10" placehlder="">
            <input type="text" name="ufIn" size="10" placehlder="">
          </div>

          <p><strong>Responsável</strong></p>
          <input type="text" name="responsavelIn" size="62" placehlder="">

          <div class="buttons">

            <button type="submit" class="btn btn-success">Adicionar</button>

            <button type="button" class="btn btn-outline-danger">Cancelar</button>
            

          </div>
        
      </div>

    </form>

  </div>

</div> 


</body>
</html>
  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>