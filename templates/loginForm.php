<!DOCTYPE html>
<html>
  <head>
    <title><?php echo htmlspecialchars($results['pageTitle'])?></title>
  </head>
<body>
    <h1>
        <?php echo htmlspecialchars($results['pageTitle'])?>
    </h1>
<form action="admin.php" method="post" style="width: 50%;">
  <input type="hidden" name="login" value="true" />

  <?php if ( isset( $results['errorMessage'] ) ) { ?>
  <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
  <?php } ?>

  <ul>
    <li>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
    </li>
    <li>
       <label for="password">Password</label>
       <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
    </li>
  </ul>

  <div class="buttons">
    <input type="submit" name="login" value="Войти" />
  </div>
</form>

<p><a href="./?action=main">Главная</a></p>

</body>
</html>