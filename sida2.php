
<html>
<head>
    <title>Sida 2</title>
    <link rel="stylesheet" type="text/css" href="cssGrejer/main.css">
</head>
<body>
<h1 id="mainHeader">tjena</h1>
<?php
//ska skapa en array och lägga till varje djur i arrayen
$djurArray = array();


if (isset($_POST['skicka'])){
    $djur1error = $djur2error = $djur3error = '';
    if (!empty($_POST['djur1namn'])){
        array_push($djurArray, $_POST['djur1namn']);
    }else{
        $djur1error="skriv djur föf";

    }
    if (!empty($_POST['djur2namn'])){
        array_push($djurArray, $_POST['djur2namn']);
    }else{
        $djur2error="skriv djur föf";
    }
    if (!empty($_POST['djur3namn'])){
        array_push($djurArray, $_POST['djur3namn']);
    }else{
        $djur3error="skriv djur föf";
    }

}
?>
<div id="centerBoxContainer">
    <div id="centerBox">
        <p>sida2, nånting med arrayer</p>
    </div>
    <div id="formbox">
        <div id="formbox1">
            <form action="" method="post">
            <div id="formboxDiv">
                <label for="djur1">skriv ett djur annars...</label>
                <input type="text" id="djur1ID" name="djur1namn" placeholder="apa..." value="<?php echo isset($_POST['djur1namn']) ? htmlspecialchars($_POST['djur1namn']) : ''; ?>">  <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                <span class="error" style="color: red"> <?php echo !empty($djur1error) ? "*" . $djur1error : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
            </div>
            <div id="formboxDiv">
                <label for="djur2">skriv ett djur annars...</label>
                <input type="text" id="djur2ID" name="djur2namn" placeholder="apa..."  value="<?php echo isset($_POST['djur2namn']) ? htmlspecialchars($_POST['djur2namn']) : ''; ?>"> <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                <span class="error" style="color: red">  <?php echo !empty($djur2error) ? "*" . $djur2error : ""; ?></span>
            </div>
            <div id="formboxDiv">
                <label for="djur3">skriv ett djur annars...</label>
                <input type="text" id="djur3ID" name="djur3namn" placeholder="apa..." value="<?php echo isset($_POST['djur3namn']) ? htmlspecialchars($_POST['djur3namn']) : ''; ?>"> <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                <span class="error" style="color: red">  <?php echo !empty($djur3error) ? "*" . $djur3error : ""; ?></span>
            </div>
        </div>
        <button type="submit" id="skickaKnappen" name="skicka">skicka</button>
        </form>
    </div>
    <?php
    if (sizeof($djurArray) == 3){                                      // bara så den inte printar när man laddar sidan
        echo "<div id='centerBox'>                                <!-- 5b, Skriver ut arrayen i råformat med funktionen print_r. -->
            <p>" . print_r($djurArray, true) . "</p>
          </div>";
        $djurArray[2] = "struts";                                   //5c, Ersätter djuret på tredje platsen med djuret ”Struts”.
        array_push($djurArray, "Alpacka");          //5d, Lägger till ett fjärde djur ”Alpacka” sist i arrayen.
        array_splice($djurArray, 0, 1);       //5e, Tar bort det första elementet helt från arrayen.
        echo "<div id='centerBox'>                                <!--5f, Skriver ut arrayen i råformat med funktionen print_r.-->
            <p>" . print_r($djurArray, true) . "</p>
            </div>";
        echo "<div id='centerBox'>                                <!--5g, Skriver ut elementet som finns på andra platsen i arrayen, vilket nu borde vara ”Struts” eftersom det första djuret är borttaget.-->
                <p>" . $djurArray[1] . "</p>
              </div>";
    }
    ?>
</div>


<?php
include_once 'footer.php';
?>
</body>
</html>
