<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $id = $_REQUEST['id'];
      echo "
      <form action=\"/router.php\" method=\"post\">
        <input type=\"text\" name=\"name\"
               placeholder=\"nombre\">
        <input type=\"text\" name=\"descripcion\"
               placeholder=\"descripcion\">
        <input type=\"hidden\" name=\"uriPage\"
               id=\"uriPage\" value=\"/edit_item\">
        <input type=\"hidden\"  name=\"id\"
               value=\"$id\">
        <button type=\"btnSubmit\" value=\"OK\">Submit</button>
      </form>
      ";
    ?>
  </body>
</html>
