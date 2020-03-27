<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Entro a main
    <br>
    <?php
      include "../controllers/db_connection.php";
      $db = new DbConnetion();
      session_start();
      $user = $_SESSION['user'];
      if($user){
        $items = $db->table('items_ctrol51')
          ->select('id, name')
          ->get();
        echo "<table>
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>detalle</th>
            </tr>
          <thread>
          <tbody>
            <tr>";
        foreach ($items as $item) {
          $id = $item['id'];
          $name = $item['name'];
          echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>
              <button onclick=\"window.location.href = '/views/item.php?id=$id';\">
                ir
              </button>
            </td>
          </tr>";
        }
        echo "</tbody></table>";
      }else{
        header("Location: /");
      }
    ?>
    <button onclick="window.location.href = '/views/createItem.php';">
      Crear item</button>
  </body>
</html>
