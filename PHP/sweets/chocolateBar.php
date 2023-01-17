<?php
$bb = 43;
$conn = new mysqli("localhost","u1624400_default","um6CBcN9huN2O3zx","u1624400_default");
mysqli_set_charset($conn, 'utf8');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM chocolateBar";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    foreach($result as $row){
        echo'<li>
            <div class="textInformation" id="textInformation'. $row["id"] .'">
                <p>'. $row["info"] .'</p>
            </div>
            <div class="buy__product" id="buy__product'. $row["id"] .'">
                <div class="buy__main">
                    <div class="buy__info">
                        <div class="buy__imageContainer">
                            <img src="'. $row["image"] .'" alt="" class="buy__picture">
                        </div>
                        <p class="productName">'
                            . $row["name"] .
                        '</p>
                        <div class="massAndRat">
                            <p class="mass">'
                                . $row["unit"] .
                            '</p>
                        </div>
                    </div>
                    <div class="buy__buyButton">
                        <div class="price">
                            <p>'
                                . $row["price"] .
                            '</p>
                            <img src="..\img\rub.png" alt="">
                        </div>
                        <div class="buy__buttonContainer" id="buy__buttonWrapper'. $row["id"] .'">
                            <div class="buy__buttonWrapper">
                                <button class="buy__button" id="buy__button" onclick="plus(`'. $row["id"] .'`)">
                                    Купить
                                </button>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="information" id="information'. $row["id"] .'" onclick="info(`'. $row["id"] .'`)">
                <img src="..\img\information.png" alt="">
            </button>
        </li>';
    }
    echo "</table>";
    $result->free();
}else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>