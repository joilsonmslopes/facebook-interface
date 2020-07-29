<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Página de login e criação de conta do facebook">
  <meta name="keywords" content="facebook,login,face,rede,social,pagina,grupo,perfil">
  <meta name="author" content="Joilson Miranda - Aluno do curso Fullstack da Danki Code">
  <title>Login Facebook</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

  <header>
    <div class="center">
      <div class="logo">
        <h2>facebook</h2>
      </div><!--logo-->

      <form method="post" class="form-login">
        <div class="form-element">
          <p>E-mail ou telefone</p>
          <input type="email" name="email" id="email">
        </div><!--form-element-->
        <div class="form-element">
          <p>Password</p>
          <input type="password" name="password" id="password">
        </div><!--form-element-->
        <div class="form-element">
          <input type="submit" name="acao" id="email" value="Enviar">
        </div><!--form-element-->
      </form><!--form-login-->
      <div class="clear"></div>

    </div><!--center-->
  </header>

  <section class="main">
    <div class="center">
      <div class="img-rede">
        <p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
        <img src="./image/img1.png">
      </div><!--img-rede-->

      <div class="abrir-conta">
        <h2>Abra sua conta</h2>
        <h3>É rápido e fácil.</h3>

        <form method="POST" class="criar-conta">
          <div class="w50">
            <input type="text" name="nome" id="nome" placeholder="Nome">
          </div><!--w50-->

          <div class="w50">
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
          </div><!--w50-->

          <div class="w100">
            <input type="email" name="email" id="email" placeholder="E-mail">
          </div><!--w100-->

          <div class="w100">
            <input type="password" name="password" id="password" placeholder="Nova senha">
          </div><!--w100-->

          <div class="w100">
            <h2>Data de Nascimento:</h2>
            <select name="nascimento-dia" class="nascimento">
              <?php
                for($i = 1; $i <= 31; $i++) {
              ?>
              <option value="<?php echo $i; ?>"><?php echo $i;?></option>
                <?php } ?>
            </select>
            <select name="nascimento-mes" class="nascimento">
              <option value="0">Janeiro</option>
              <option value="0">Fevereiro</option>
              <option value="0">Março</option>
              <option value="0">Abril</option>
              <option value="0">Maio</option>
              <option value="0">Junho</option>
              <option value="0">Julho</option>
              <option value="0">Agosto</option>
              <option value="0">Setembro</option>
              <option value="0">Outubro</option>
              <option value="0">Novembro</option>
              <option value="0">Dezembro</option>
            </select>
            <select name="nascimento-ano" class="nascimento">
            <?php
                for($i = 2020; $i >= 1950; $i--) {
              ?>
              <option value="<?php echo $i; ?>"><?php echo $i;?></option>
                <?php } ?>
            </select>
            <div class="clear"></div>
          </div><!--w100-->

          <div class="w100">
            <h2>Gênero</h2>
             <div class="input-radio">
               <input type="radio" name="sexo" value="feminino">
               <p>Feminino</p>
              </div><!--input-radio-->
             <div class="input-radio">
               <input type="radio" name="sexo" value="masculino">
               <p>Masculino</p>
              </div><!--input-radio-->
             <div class="clear"></div>
          </div><!--w100-->

          <div class="w100">
            <input type="submit" name="acao" id="acao" value="Cadastre-se">
          </div><!--w100-->

          <div class="clear"></div>
        </form><!--criarconta-->
      </div><!--abrir-conta-->

      <div class="clear"></div>
    </div><!--center-->
  </section><!--main-->

  <section class="linguas">
      <div class="center">
          <a class="selected-lingua" href="#">Português (Brasil)</a>
          <a href="#">English (US)</a>
          <a href="#">Español</a>
          <a href="#">Francais (France)</a>
          <a href="#">Italiano</a>
          <a href="#">العربية</a>
          <a href="#">Deutsch</a>
          <a href="#">हिन्दी</a>
          <a href="#">中文(简体)</a>
          <a href="#">日本語</a>
          <input type="button" value="+">
      </div><!--center-->
      <div class="center">
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
      </div><!--center-->
      <div class="center">
        <p>facebook &copy; 2020</p>
      </div><!--center-->
  </section><!--linguas-->
  
</body>
</html>