
<!DOCTYPE html>
<head>
    <title>Sida 1</title>
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
<div class="centerBox">
    <div class="centerBox" style="width: 60%">
        <h2>
            PHP-sida 1 Allmänt
        </h2>
        <p>
            skriv in nånting och så mixar denna sida till det
        </p>
    </div>
    <?php
    echo "<p>denna text är genererad med php echo!!!</p>";
    ?>
    <form action="" method="post">  <!-- formulär för att skicka data till servern -->
        <label for="namn">ange namn:</label>
        <input type="text" id="namn" name="namn" placeholder="Skriv ditt namn här föfan">
        <button type="submit" id="skickaKnappen" name="skicka">skicka</button>
    </form>


    <?php
    if (isset($_POST['skicka'])) { // om skicka-knappen är tryckt
        if (empty($_POST['namn'])) { // om rutan är tom
            echo "<p>du måste skriva något i rutan</p>"; //skriv ajabaja
            return;
        } else {
            $strName = $_POST['namn']; //skriv grajsorna
            echo "<p>Hej " . $strName . "</p>";
            echo "<p>Baklänges: " . strrev($strName) . "</p>";
            echo "<p>Gemener: " . strtolower($strName) . "</p>";
            echo "<p>Versaler: " . strtoupper($strName) . "</p>";
            echo "<p>Antal tecken: " . strlen($strName) . "</p>";
        }
    }
    ?>




</div>
<?php
 include_once 'footer.php';
?>
</body>
</html>