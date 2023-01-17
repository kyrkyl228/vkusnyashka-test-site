<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\sweets.css?v3.1f">
    <link rel="stylesheet" href="..\css\fonts.css?v3.1f">
    <link rel="stylesheet" href="..\cssMobile\sweetsMobile.css?v3.1f">
    <link rel="icon" href="..\img\favicon.png" type="image/x-icon">
    <title>Сладости</title>
</head>
<body>
    <div class="head">
        <header>
            <div class="logo">
                <a href="..\index.html">
                    <img src="..\img\logo.png" alt="" class="logo__img">
                    <p class="logo__name">Вкусняшка</p>                    
                </a>                 
            </div>
            <nav>
                <ul class="nav__list">
                    <li><a href="..\other_pages\sweets.php">Сладости</a></li>
                    <li><a href="..\other_pages\Confectionery.php">Кондитерские изделия</a></li>
                    <li><a href="..\other_pages\drinks.php">Напитки</a></li>
                </ul>
            </nav>
            <div class="basket">
                <a href="..\other_pages\basket.php"><img src="..\img\basket-2-svgrepo-com 2.png" alt="" class="basket__image"></a>
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
        </header>
        <div class="lure">
            <p class="lure__title">
                Качественные изделия для каждого
            </p>
            <p class="lure__text">
            Мы заботимся о качестве нашей продукции, мы постоянно расширяем наш ассортимент и ищем новых поставщиков самых удивительных сладких товаров. Мы сделали наш магазин максимально удобным для Вас. Широчайший ассортимент, доступные цены, отличный сервис, быстрая доставка по Сургуту. Мы беспокоимся о том, чтобы Вам действительно нравился наш магазин и Вы возвращались к нам снова и снова. Спасибо, что выбрали нас!
            </p>
        </div>               
    </div>
    <div class="wrapper"> 
        <div class="content">
            <div class="subsections">
                <div>
                    <button class="subsections__button" id="button__caramel" onclick="caramel()">
                        <img src="..\img\lollipop.png" alt="">
                        <P>Карамель</P>
                    </button>
                </div>
                <div>
                    <button class="subsections__button" id="button__chocolateBar" onclick="chocolateBar()">
                        <img src="..\img\chocolateBar.png" alt="">
                        <P>Батончики</P>
                    </button>
                </div>
                <div>
                    <button class="subsections__button" id="button__halva" onclick="halva()">
                        <img src="..\img\halva.png" alt="">
                        <P>Халва</P>
                    </button>
                </div>
                <div>
                    <button class="subsections__button" id="button__chocolate" onclick="chocolate()">
                        <img src="..\img\chocolate.png" alt="">
                        <P>Конфеты</P>
                    </button>
                </div>
            </div>
            <div class="products" id="products">
                <ul class="caramel" id="caramel">
                    <?php include_once "../PHP/sweets/caramel.php"; ?>
                </ul>
                <ul class="chocolateBar" id="chocolateBar" style="display: none;">
                    <?php include_once "../PHP/sweets/chocolateBar.php"; ?>
                </ul>
                <ul class="halva" id="halva" style="display: none;">
                    <?php include_once "../PHP/sweets/halva.php"; ?>
                </ul>
                <ul class="chocolate" id="chocolate" style="display: none;">
                    <?php include_once "../PHP/sweets/chocolate.php"; ?>
                </ul>
            </div>
        </div>       
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="..\js\calc.js?v3.1f"></script>
    <script src="..\js\logicSweets.js?v3.1f"></script>
    <script src="..\js\logicAll.js?v3.1f"></script>
</body>
</html>