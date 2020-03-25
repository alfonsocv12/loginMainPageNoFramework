<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/router.php" method="post">
      <h2> sign up </h2>
      <input type="text" name="name"
             pattern="[a-Z0-9]+" maxlength="18"
             placeholder="user name" required="required"/>
      <input type="password" name="password"
             required="required" placeholder="password">
      <input type="password" name="confirm_password"
             required="required" placeholder="confirm password">
      <input id="uriPage" name="uriPage"
             type="hidden" value="/sign_up">
      <button name="btnSubmit" class="submit"
              value="ok">
        sign up
      </button>
    </form>
  </body>
</html>
