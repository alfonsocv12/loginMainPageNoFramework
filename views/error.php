<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $code = $_REQUEST['code'];
      $message = $_REQUEST['message'];

      echo "<h1>Error $code</h1>";
      echo "<p> $message </p>";
    ?>
  </body>
</html>
