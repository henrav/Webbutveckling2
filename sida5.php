<?php
$serverNamn = $_SERVER['SERVER_NAME'];
$userIP = $_SERVER['REMOTE_ADDR'];
$phpFileName = $_SERVER['PHP_SELF'];
$userPort = $_SERVER['REMOTE_PORT'];
$methodKöra = $_SERVER['REQUEST_METHOD']

?>


<html>
<head>
    <title>Sida 5</title>
    <link rel="stylesheet" type="text/css" href="cssGrejer/main.css">
</head>
<body>
<h1 id="mainHeader">tjena</h1>
<div id="centerBoxContainer">
    <div id="centerBox" style="width: 60%">
        <h2>
            PHP-sida 5 Allmänt
        </h2>
        <p>
            Här är en sida som inte gör något speciellt
        </p>
        <div id="formbox">
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
