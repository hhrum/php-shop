<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <title><?= $title ?></title>
</head>
<body>
    
    <div class="header container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-2 order-1">
                <div class="header__logo">
                    <i class="header__icon fa fa-slack fa-2x" aria-hidden="true"></i>
                    <p>Мой магазинчик</p>
                </div>
            </div>
            <div class="col-6 col-lg-2 order-3 order-lg-2">
                <div class="header__categories">
                    <i class="header__icon fa fa-bars" aria-hidden="true"></i>
                    Категории
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 order-2 order-lg-3">
                <div class="header__search">
                    <i class="header__search-icon fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Я ищу...">
                </div>
            </div>
            <div class="col-3 col-md-2 order-4">
                <div class="header__contacts">Контакты</div>
            </div>
            <div class="col-3 col-md-2 order-5">
                <div class="header__help">Помощь</div>
            </div>
        </div>
    </div>
    
    <?= $content ?>

    <footer class="container">
        Footer
    </footer>
</body>
</html>