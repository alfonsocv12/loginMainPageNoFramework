<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Item
    <?php
      include "../controllers/db_connection.php";
      $db = new DbConnetion();

      $id = $_REQUEST['id'];

      $item = $db->table("items_ctrol51")
        ->find($id);
      $id = $item['id'];
      $name = $item['name'];
      $detalle = $item['description'];
      echo "
      <table>
        <thead>
          <tr>
            <td>name</td>
            <td>datalle</td>
            <td>modificar</td>
            <td>Eliminar</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>$name</td>
            <td>$detalle</td>
            <td>
              <button onclick=\"window.location.href = '/views/itemModify.php?id=$id';\">
                Modificar
              </button>
            </td>
            <td>
              <form action=\"/router.php\" method=\"post\">
                <input type=\"hidden\" name=\"id\" value=\"$id\">
                <input type=\"hidden\" name=\"uriPage\" value=\"/delete_item\">
                <button type=\"btnSubmit\" value=\"OK\">Eliminar</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
      ";
    ?>
  </body>
</html>
