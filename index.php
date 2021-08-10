<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <!-- font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Низкие цены | KindexStore</title>
  </head>
  <body>
    <header>
      <span class="title">Kindex</span>
      <span class="links">
        <a href="index.html">Главная</a>
        <a href="shop.html">Магазин</a>
        <a href="log_in.html">Вход</a>
        <span class="cart"><a href="cart.html"><img src="img/cart.png" width="20px" height="20px"></a></span>
      </span>
    </header>
    <main>
      <?php
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($uri === '/')
          require home.php;
        elseif ($uri === '/store')
          require pages/store.php;
        elseif ($uri === '/cart')
          require pages/cart.php;
        elseif ($uri === '/product')
          require pages/product.php;
        ?>
    </main>
    <footer>
      <p>©2021 Интернет-магазин</p>
    </footer>
    <script src="scripts\script.js"></script>
  </body>
</html>