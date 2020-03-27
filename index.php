<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
    session_start();
    $_SESSION = array();
    session_unset();
    session_destroy();
  ?>
  <body>
    <form class="" action="router.php" method="/sign_in">
      <h2>
        Sign in
      </h2>
      <span class="entypo-user inputUserIcon">
         <i class="fa fa-user"></i>
      </span>
      <input type="text" name="email"
             pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$"
             maxlength="28" autofocus="autofocus"
             placeholder="Email" required="required"/>
      <span class="entypo-key inputPassIcon">
         <i class="fa fa-key"></i>
       </span>
      <input type="password" class="pass" name="password"
             required="required"
             placeholder="Contraseña"/>
      <input type="password" name="hash_key"
             placeholder="hash_key" required="required">
      <input type="hidden"
             name="intentos"/>
      <input id="uriPage" name="uriPage" type="hidden" value="/sign_in"/>
      <button name="btnSubmit" class="submit" value="OK">login</button>
    </form>
    <h2>
      <span class="entypo-login">
            <i class="fa fa-sign-in"></i>
      </span><a href="views/createuser.php">Crear Usuario</a>
    </h2>
  </body>
</html>
