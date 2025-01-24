<?php

function räknaOmkrets ($längd, $bredd){ //räkna omkrets och skriv ut html
    $omkrets = (2 * $längd) + (2 * $bredd);
    $area = räknaArea($längd, $bredd);
    echo "<div>
                <p>
                    Omkretsen är: $omkrets
                </p>
              </div>";
    echo "<div>
                <p>
                    Arean är: $area
                </p>
              </div>";
}

function räknaArea ($längd, $bredd){  // räkna area
    return $längd * $bredd;
}

$length = $width = '';
$lengthError = $widthError = '';  // deklarera variabler
if (isset($_POST['skickaKnappen'])){    //om klickar skicka
    if (empty($_POST['length']) || $_POST['length'] <= 0){   // kollar om man skrivit grejer
        $lengthError = "skriv in längd";
    }else{
        $length = $_POST['length'];
    }

    if (empty($_POST['width']) || $_POST['width'] <= 0){
        $widthError = "skriv in bredd";
    }else{
        $width = $_POST['width'];
    }
}

?>


<!DOCTYPE html>
<head>
    <title>Sida 4</title>
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
            PHP-sida 4 Allmänt
        </h2>
        <p>
            skriv längden och bredden på din sak, efter det så räknar vi ut dens omkrets och area!!! (=
        </p>
        <div class="formbox">
            <div class="formbox1">
                <form action ="" method="post" id="formgrej">
                    <div class="formboxDiv">
                        <div>
                            <label for="length">Ange längd:</label>
                        </div>
                        <div>
                            <input type="number" id="length" name="length"  step="0.0001"  value="<?php echo isset($_POST['length']) ? $_POST['length'] : ''; ?>">
                        </div>
                        <div style="justify-self: left">
                            <span class="error" style="color: red"> <?php echo !empty($lengthError) ? "*" . $lengthError : ""; ?></span>
                        </div>
                    </div>
                    <div class ="formboxDiv">
                        <div>
                            <label for="width">Ange bredd:</label>
                        </div>
                        <div>
                            <input type="number" id="width" name="width" step="0.0001" value="<?php echo isset($_POST['width']) ? $_POST['width'] : ''; ?>">
                        </div>
                        <div id="nygrej">
                            <div>
                                <button type="submit" id="skickaKnappen" name="skickaKnappen">skicka</button>
                            </div>
                            <div>
                                <span class="error" style="color: red"> <?php echo !empty($widthError) ? "*" . $widthError : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <?php
                if (isset($_POST['skickaKnappen'])){
                    if (!empty($length) && !empty($width)){
                        räknaOmkrets($length, $width);
                    }
                }
            ?>
        </div>
    </div>

</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
