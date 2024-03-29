

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu Inicial</title>  

  <!- Imports -!>
  <link rel="stylesheet" href="./css/css-index.css">   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">

      

        <div class="logoTxt">
          Green Alert
        </div>


          <div class="card card-container">
          <div class="logoImg">
            <img src=".\Imagens\logo-menu.png" alt="imagemLogo" width=80px>
          </div>
              <p id="profile-name" class="profile-name-card"></p>
              <form class="form-signin">
                  <span id="reauth-email" class="reauth-email"></span>
                  <input type="text" id="nome" class="form-control" placeholder="Nome" required autofocus>
                  <input type="password" id="senha" class="form-control" placeholder="Senha" required>
                  <div id="remember" class="checkbox">
                      <label>
                          <input type="checkbox" value="remember-me"> Lembre-se de mim
                      </label>
                  </div>
                  <div class="btnEntrar">
                      <a href="empresas.php"> <!- Link para pagina "empresas.php" -!>
                      <button type="button" class="btn btn-success">Entrar</button>
                      </a>       
                  </div>
              </form> <!- /form ->
              <a href="#" class="forgot-password">
                  Esqueceu a senha?
              </a>
          </div> <!- /card-container ->
      </div>  
  

</body>
</html>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
