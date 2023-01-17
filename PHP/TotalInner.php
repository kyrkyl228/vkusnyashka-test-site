<?php
    $_POST['txt'] = json_decode($_POST['txt']);
    $test = $_POST['txt'];

    $total = 0;
// $conn = new mysqli("localhost","u1624400_default","um6CBcN9huN2O3zx","u1624400_default");
// mysqli_set_charset($conn, 'utf8');
// if($conn->connect_error){
//     die("Ошибка: " . $conn->connect_error);
// }

// $result = mysqli_query($conn, "SHOW TABLES FROM u1624400_default");

// echo $result;

$conn = new mysqli("localhost","u1624400_default","um6CBcN9huN2O3zx","u1624400_default");
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, "SHOW TABLES FROM u1624400_default");
$check = mysqli_num_rows($result);
  if ($check == 0){
    echo "<br><b>Список пуст!</b><br>";
  }else{
    while ($table = mysqli_fetch_array($result)){
      $tab = mysqli_query($conn, "SELECT * FROM $table[0]");  
      $numread = mysqli_num_rows($tab);
      
      
      $sql = "SELECT * FROM $table[0]";
      if($res = $conn->query($sql)){
          $rowsCount = $res->num_rows; // количество полученных строк
          foreach($res as $row){
              for($i = 0; $i < count($_POST['txt']); $i++ ){
                  $mass = $_POST['txt'];
                if( strcasecmp($mass[$i][0], $row["id"]) == 0){
                    $total += $mass[$i][1] * $row["price"];
                }

              }

            }
      }else{
          echo "Ошибка: " . $conn->error;
      }  


    }
  }



  echo json_encode($total);


$conn->close();









?>