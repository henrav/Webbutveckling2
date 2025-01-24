
<!DOCTYPE html>
<head>
    <title>Sida 3</title>
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
<?php
    if (isset($_POST['skicka'])){
        $textERROR = '';       // deklarera variabler och grajsor
        $textArray = array();
        $text = '';
        $sökOrd = '';
        $sökOrdERROR = '';
        if (empty($_POST['derasText'])){  //if tomt, då sätt error text till  detta
            $textERROR = "skriv något i rutan";
        }else{
            $text = $_POST['derasText'];  // annars sätt text = det dem skrev in
            $textArray = explode(" ", $text);   //explodera skiten, sätter in ord baserat på mellanslag
        }

        if (empty($_POST['sökOrd'])){
            $sökOrdERROR = "skriv in ett ord att söka efter";
        }else{
            $sökOrd = $_POST['sökOrd'];    //sparar sökordet
        }
    }


?>
<div class="centerBoxContainer">
    <div class="centerBox" style="width: 60%">
        <h2>
            PHP-sida 3 Allmänt
        </h2>
        <p>
            tar in mening, kollar hur många specifikt ord upprepas. skriver du fel slutar det inte bra för dig...
        </p>
        <div class="formbox">
            <div class="formbox1">
                <form action="" method="post" id="formgrej">
                    <div class="formboxDiv">
                        <div style="justify-self: right">
                            <label for="derasText">Skriv in din text nu, annars...</label>
                        </div>
                        <div>
                            <input type="text" id="derasText" name="derasText" placeholder="hej jag heter henrik..." value="<?php echo isset($_POST['derasText']) ? ($_POST['derasText']) : ''; ?>">  <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                        </div>
                        <div style="justify-self: left">
                            <span class="error" style="color: red"> <?php echo !empty($textERROR) ? "*" . $textERROR : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
                        </div>
                    </div>
                    <div class="formboxDiv">
                        <div style="justify-self: right">
                            <label for="sökOrd">skriv ordet nu...</label>
                        </div>
                        <div>
                            <input type="text" id="sökOrd" name="sökOrd" placeholder="hej..." value="<?php echo isset($_POST['sökOrd']) ? ($_POST['sökOrd']) : ''; ?>">
                        </div>
                        <div class="nygrej">
                            <div>
                                <button type="submit" id="skicka" name="skicka">skicka</button>
                            </div>
                            <div>
                                <span class="error" style="color: red"> <?php echo !empty($sökOrdERROR) ? "*" . $sökOrdERROR : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
                            </div>
                        </div>
                    </div>
            </div>
            </form>

    </div>
        <div class="newbox">
            <div class="newbox1">
                <h2>
                    <?php
                    if (!empty($textArray) && empty($textERROR)){      //om textarray inte är tom och texterror är tom
                        echo "Din text:";  //skriv ut detta
                    }
                    ?>
                </h2>
                <h3>
                    <?php
                    if (!empty($textArray) && empty($sökOrdERROR)){    //om textarray inte är tom och sökorderror är tom
                        foreach ($textArray as $word){   //printa ut texten
                            echo $word . " ";
                        }
                    }
                    ?>
                </h3>
            </div>
            <div class="newbox2">

                <p>
                    <?php
                    if (isset($_POST['skicka'])){   //om skicka är tryckt
                        if (!empty($sökOrd)) {  //om sökord inte är tomt
                            if (!empty($text)) {  //om text inte är tom
                                $antal = 0;
                                foreach ($textArray as $word) {  //loopa igenom grejsen
                                    if ($word == $sökOrd) {    //om lika
                                        $antal++;             //öka
                                    }
                                }
                                echo "Ordet " . $sökOrd . " finns " . $antal . " gånger i texten";
                            }
                        }
                    }

                    ?>
                </p>
            </div>
        </div>

</div>


<?php
include_once 'footer.php';
?>
</body>
</html>