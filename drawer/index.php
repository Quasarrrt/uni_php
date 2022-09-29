
<html lang="ru">
<head>
    <title>Hello world page</title>
    <link rel="stylesheet" href="../style.css" type="text/css"/>
</head>
<body>


<?php


$param = null;
/*9777777*/
if(!empty($_POST['param']))
{
    $param = $_POST['param'];
}

if (is_null($param))
{
    $param = 111111;
}

$fill = "#".substr($param, 1,6);

$size_rect = round(substr($param, 1,3) );

$size = $size_rect / 2;

$e_size = $size / 2;

$i = substr($param, 0,1);

if ($i <=3)
    echo "<svg width=$size_rect height=$size_rect>
                   <circle cx=$size cy=$size r=$size fill=$fill>
                   </svg>";
else
    if ($i <= 6){

        echo "<svg width=$size_rect height=$size_rect>
                         <rect width=$size_rect height=$size_rect fill = $fill>
                         </svg>";
    }
    else
        if ($i <= 9)
            echo " <svg height=$size_rect width=$size_rect>
                          <ellipse cx=$size cy=$size rx=$size ry=$e_size
                          style = fill:$fill>
                        </svg>";


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Enter your param: <input type="text" name="param" />
    <input type="submit" />
</form>

</body>
</html>
