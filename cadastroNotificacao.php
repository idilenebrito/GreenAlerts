<?php
  include ("./classes/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Alerts - Sistema de alerta de data</title>

    <!- Imports -!>
  <link rel="icon" href="Imagens/logo-trans.PNG" type="image/x-icon" />  
  <link rel="stylesheet" href="./css/css-cadastroNotificacao.css"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--import google icones-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<div class="corpo">
  <form method="POST" action="./classes/Classes-GA/cadastroNoti.php">
    <div class="topo">
       <h3><i class="material-icons" style="font-size:32px; color: green">access_alarms</i>  Cadastro de Notificações</h3>
    </div>

    <div class="form-group col-md-3"> <!--botao cadastrar empresa-->
      <a href="cadastroEmpresa.html"> 
      <button class="button button1">Cadastrar empresa</button>   <!--botao ok-->
      </a>
    </div>

    <!-- Dropdawn responsavel para mostrar as empresas cadastradas -->
    <div class="row bccu">
      <div class="form-group col-md-3" style="border: dashed black;">
        <label for="sel-empresa">Empresa</label>
        <input list="nomeFantasia_empresa" name="selEmpresa"  class="form-control"/>  
        <datalist id="nomeFantasia_empresa">
          <?php
            $select_empresa = "CALL `green_alert`.`PROC_SEL_EMPRESA`();";
            $res_select = mysqli_query($conexao, $select_empresa);
              while($emp = mysqli_fetch_array($res_select)) {
                $selEmpresa=$emp['nomeFantasia_empresa'];
                echo "<option value='$selEmpresa'> $selEmpresa</option>";
              }   
          ?>
        </datalist>
      </div>
      
      <div class="form-group  col-md-3"style="border: dashed black;">
            <label for="url-doc">Documento</label>
            <input type="file" class="form-control-file" name="urlDoc" id="urlDocJS">
            </div>
      </div>

      <div class="form-group  col-md-2"style="border: dashed black;">
            <label for="url-doc">Nome do documento</label>
            <input type="text" class="form-control" name="nomeDoc" id="nomeDocJS">
            </div>
      </div>
    </div>

    <div class="corpo">
      <div class=" row">
        <div class="form-group col-md-3">
            <label for="dataVen">Data de vencimento</label>
            <input type="date" class="form-control" name="dataVenc" id="dataVencJS">
        </div> 

        <div class="form-group col-md-4">
          <label for="obs">Observações</label>
          <textarea name="obs" id="obsJS"  class="form-control" ></textarea>
        </div>
      </div>
    </div>
    
    <div class= "corpo">
    <label for="rad-not">Opções de Notificações</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="2" name="dataNoti">
        <label class="form-check-label" for="Check2">
          2 
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="3" name="dataNoti">
        <label class="form-check-label" for="Check3">
          3 dias
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="7" name="dataNoti">
        <label class="form-check-label" for="defaultCheck1">
          7 dias
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="qtdDia" name="dataNoti">
        <input class="form-check-label" for="defaultCheck1">            
      </div>

      <div class="form-group buttons">
        <input type="submit" value="Cancelar" class="btn btn-outline-danger buttons">
        <input type="submit" value=" Salvar " class="btn btn-success buttons">           
      </div>
    </div>

  </form>
</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>