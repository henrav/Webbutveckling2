<?php
$serverNamn = $_SERVER['SERVER_NAME'];
$userIP = $_SERVER['REMOTE_ADDR'];
$phpFileName = $_SERVER['PHP_SELF'];
$userPort = $_SERVER['REMOTE_PORT'];
$methodKöra = $_SERVER['REQUEST_METHOD']

?>


<!DOCTYPE html>
<head>
    <title>Sida 5</title>
    <link rel="stylesheet" type="text/css" href="cssGrejer/main.css">
</head>
<body>
<div class="tjenaHeader">
    <div class="centreragrejenkomigenvarförvillduintevaraicenterjagfårpanik">
        <?php
        include_once 'navBarGrejsimojs.php';
        ?>
    </div>
    <h1 class="mainHeader">tjena</h1>
</div>
<div class="centerBoxContainer">
    <div class="centerBox" style="width: 60%">
        <h2>
            PHP-sida 5 Allmänt
        </h2>
        <p>
            Här är en sida som inte gör något speciellt
        </p>
        <div class="formbox">
            <?php
                echo "<p>$serverNamn</p>";
                echo "<p>$userIP</p>";
                echo "<p>$phpFileName</p>";
                echo "<p>$userPort</p>";
                echo "<p>$methodKöra</p>";

            ?>

        </div>
    </div>

</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
