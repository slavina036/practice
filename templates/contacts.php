<!DOCTYPE html>
<html>
  <head>
    <title><?php echo htmlspecialchars($results['pageTitle'])?></title>
  </head>
<body>
    <h1>
        <?php echo htmlspecialchars($results['pageTitle'])?>
    </h1>
    <p><a href="./?action=main">Главная</a></p>
    <p><a href="./?action=about">О компании</a></p>
</body>
</html>