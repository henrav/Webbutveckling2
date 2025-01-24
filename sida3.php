
<html>
<head>
    <title>Sida 3</title>
    <link rel="stylesheet" type="text/css" href="cssGrejer/main.css">
</head>
<body>
<h1 id="mainHeader">tjena</h1>
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
<div id="centerBoxContainer">
    <div id="centerBox" style="width: 60%">
        <h2>
            PHP-sida 3 Allmänt
        </h2>
        <p>
            Här är en sida som inte gör något speciellt
        </p>
        <div id="formbox">
            <div id="formbox1">
                <form action="" method="post" id="formgrej">
                    <div id="formboxDiv">
                        <div style="justify-self: right">
                            <label for="derasText">Skriv in din text nu, annars...</label>
                        </div>
                        <div>
                            <input type="text" id="texte" name="derasText" placeholder="hej jag heter henrik..." value="<?php echo isset($_POST['derasText']) ? ($_POST['derasText']) : ''; ?>">  <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                        </div>
                        <div style="justify-self: left">
                            <span class="error" style="color: red"> <?php echo !empty($textERROR) ? "*" . $textERROR : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
                        </div>
                    </div>
                    <div id="formboxDiv">
                        <div style="justify-self: right">
                            <label for="sökOrd">skriv ordet nu...</label>
                        </div>
                        <div>
                            <input type="text" id="sökordet" name="sökOrd" value="<?php echo isset($_POST['sökOrd']) ? ($_POST['sökOrd']) : ''; ?>">
                        </div>
                        <div id="nygrej">
                            <div>
                                <button type="submit" id="skickaKnappen" name="skicka">skicka</button>
                            </div>
                            <div>
                                <span class="error" style="color: red"> <?php echo !empty($sökOrdERROR) ? "*" . $sökOrdERROR : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
                            </div>
                        </div>
                    </div>
            </div>
            </form>

    </div>
        <div id="newbox">
            <div id="newbox1">
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
            <div id="newbox2">

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