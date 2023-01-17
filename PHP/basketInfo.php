<?php
    $_POST['txt'] = json_decode($_POST['txt']);
    $test = $_POST['txt'];

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
                    echo '<li class="list"  id="list'. $row["id"] .'">
                            <div class="wrapperList">
                            <div class="wrapperlist__imageWrapper">
                              <img src="'. $row["image"] .'" alt="" class="imageWrapper__img">
                            </div>
                            <div class="wrapperList__mainWrapper">
                              <div class="mainWrapper__name">'
                              . $row["name"] .
                              '</div>
                              <div class="mainWrapper__unit">
                                '. $row["unit"] .'
                              </div>
                              <div class="mainWrapper__amount">
                                <div class="mainWrapper__value">
                                    <p class="mainWrapper__mainValue" id="mainWrapper__mainValue'.$row["id"].'">
                                      '. $mass[$i][1] .'
                                    </p>
                                    <p>
                                      X
                                    </p>
                                </div>
                                <div class="mainWrapper__buttons">
                                  <button class="minus" onclick="minus(`'. $row["id"] .'`,`'. $row["price"] .'`)">-</button>
                                  <button class="plus" onclick="plus(`'. $row["id"] .'`,`'. $row["price"] .'`)">+</button>
                                </div>
                              </div>
                              <div class="mainWrapper__cost">
                                <p id="mainWrapper__cost'. $row["id"] .'">'. $mass[$i][1] * $row["price"] .'</p>
                                <img src="../img/rub.png" alt="">
                              </div>
                            </div>
                          </div>
                        </li>';
                }

              }

            }
          echo "</table>";
      }else{
          echo "Ошибка: " . $conn->error;
      }  


    }
  }






$conn->close();









?>