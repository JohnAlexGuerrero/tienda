<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
</head>
<body>
    <table border="1" aling="center">
    <tr><td>User:</td>
    <td>Firstname:</td>
    <td>Lastname:</td>
    <td>Email:</td>
    <td>Photo:</td>
    <td>activities</td></tr>

    <tbody>
          <?php
            include "database.php";
            $n=1;
              $sql="SELECT * FROM usuarios";
              $result=$conn->query($sql);

              if($result->num_rows > 0){
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$n."</td>";
                      echo "<td>".$row['firstname']."</td>";
                      echo "<td>".$row['lastname']."</td>";
                      echo "<td>".$row['email']."</td>";
                      echo "<td><img src='".$row['photo']."' width='40'></td>
                      <td><a href='form_update.php?id='><img src='icons/edit_icon.png' width='20'></a> 
                      <a href='delete.php?id='><img src='icons/delecte_icon.png' width='20'></a></td></tr>";
                      $n++;
                  }
              }else{
                  echo "<div class=alert alert-success>
                  <strong>!no hay productos registrados!.</strong> 
              </div>";
              }
              
      ?>
    </tbody>
    </table>
    <br>
    <button aling="center">Edit profile</button>
</body>
</html>