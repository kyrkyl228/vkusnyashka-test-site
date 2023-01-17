<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/basket.css?v3.1f">
    <link rel="stylesheet" href="../cssMobile/basketMobile.css?v2.00002?v3.1f">
    <link rel="stylesheet" href="../css/fonts.css?v3.1f">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js?v3.1f"></script>
    <script src="https://3dsec.sberbank.ru/payment/docsite/assets/js/ipay.js?v3.1f"></script>
    <script src="../js/basketAJAX.js?v3.1f"></script> 
    <script src="../js/basket.js?v3.1f"></script> 
    <script>
        var ipay = new IPAY({api_token: 'YRF3C5RFICWISEWFR6GJ'});
    </script>    
    <link rel="icon" href="..\img\favicon.png" type="image/x-icon">
    <title>Корзина</title>
</head>
<body class="basketBody">
    <div class="herringWrapper" id="herringWrapper">
        <div class="herring" id="herring">
            <div class="wrapperWrapper">
                <div class="wrapper" id="wrapper">
                    <div class="arranged">
                        <div class="arranged__logo">
                            <img src="../img/logo.png" alt="">
                            <p>Вкусняшка</p>
                        </div>
                        <div class="arranged__form">
                            <form id="arrangedForm">
                                <!-- Hidden Required Fields -->
                                    <input type="hidden" name="project_name" value="Site Name">
                                    <input type="hidden" name="admin_email" value="infopokupkiw@gmail.com">
                                    <input type="hidden" name="form_subject" value="Form Subject">
                                <!-- END Hidden Required Fields -->
                                <div class="arranged__formWorkplace">
                                    <ul>
                                        <li class="arranged__list">
                                            <label for="">Имя</label>
                                            <input type="text" name="name">
                                        </li>
                                        <li class="arranged__list">
                                            <label for="">Фамилия</label>
                                            <input type="text" name="secondName">
                                        </li>
                                        <li class="arranged__list">
                                            <label for="">Адрес</label>
                                            <input type="text" name="addres">
                                        </li>
                                        <li class="arranged__list">
                                            <label for="">Номер телефона</label>
                                            <input type="text" value="+7" name="foneNumber">
                                        </li>
                                        <li visibility="hidden">
                                            <input type="hidden" name="purchase" id="purchaseID" value="">
                                            <input type="hidden" name="cost" id="costID" value="">
                                        </li>                                        
                                        <li class="arranged__list">
                                            <label for="">Пожелания</label>
                                            <textarea name="wish"></textarea>
                                        </li>
                                    </ul>
                                </div>
                                <button class="form__butt" type="submit hidden" id="myButton"><img src="img\Vector 1.png" alt=""></button>
                            </form>
                            <div class="arranged__buttonWrapper" id="arranged__buttonWrapper">
                                <button class="arranged__button" type="submit" id="myButton">
                                    Оплатить
                                </button>    
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <header class="head">
        <div class="sections">
            <div class="sections__logo">
                <a href="..\index.html">
                    <img src="..\img\logo.png" alt="">
                    <p>Вкусняшка</p>                        
                </a>
            </div>
            <ul class="sections__list">
                <li>
                    <a href="sweets.php">Сладости</a>
                </li>
                <li>
                    <a href="Confectionery.php">Кондитерские изделия</a>
                </li>
                <li>
                    <a href="drinks.php">Напитки</a>
                </li>
            </ul>
            <div class="basket">
                <a href="basket.php"><img src="..\img\basket-2-svgrepo-com 2.png" alt="" class="basket__image"></a>
                <div class="NavWrapper">
                    <img src="..\img\mobileNav.png" class="newNav" alt="">
                    <nav class="navMobile">
                        <ul class="nav__listNew" >
                            <li><a href="..\other_pages\sweets.php">Сладости</a></li>
                            <li><a href="..\other_pages\Confectionery.php">Кондитерские изделия</a></li>
                            <li><a href="..\other_pages\drinks.php">Напитки</a></li>
                            <li><a href="..\other_pages\basket.php">Корзина</a></li>
                        </ul>                       
                    </nav>                    
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <ul class="purchases" id="purchases">
            
        </ul>
        <div class="buy">
            <div class="totalPrice">
                <p id="totalPrice__inner"></p><img src="../img/rub.png" alt="">
            </div>
            <div class="buttonWrapper">
                <button class="paymentButton" id="paymentButton" onclick="arranged()">
                    Оформить
                </button>
            </div>
        </div>
    </div> 
</body>
</html>