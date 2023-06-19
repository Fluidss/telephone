<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header>
        <div class="wrap">
            <div class="logo"><a href="/"><img class="logo-img" src="assets/img/phone.png" alt="логотип" width="30" height="30">Кто мне звонил?</a></div>
            <nav>
                <ul class="nav-list">
                    <li class="nav-list_item"><a class="nav-list_link" href="/">Кто мне звонил?</a></li>
                    <li class="nav-list_item"><a class="nav-list_link" href="/operators/">Операторы</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="row mx-auto">
            <div class="content">
                <form action="search" class="main-form" method="post">
                    <div class="mb-3">
                        <label class="form-label">Введите номер телефона</label>
                        <input type="text" name='tel' class="form-control" placeholder="Например, 79627883311" autocomplete="off">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Поиск</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (!empty($response) && empty($response['info'])) : ?>
        <div class="alert alert-success" role="alert">
            Кто звонил с номера: <b>+7<?= $response['full_num'] ?></b>
        </div>
        <div class="alert alert-success" role="alert">
            Оператор данного номера: <b><?= $response['operator'] ?></b>
        </div>
        <div class="alert alert-success" role="alert">
            Регион данного номера: <b><?= $response['region'] ?></b>
        </div>
    <? endif; ?>
    <?php
    if (!empty($error)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <? endif; ?>
    <div class="container">
        <div class="mx-auto desc">
            <p class="text-center">На данной странице вы можете узнать с какого города и оператора Вам звонили.</p>
        </div>
    </div>
</body>

</html>