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
<html>
<head>
    <title>Sida 2</title>
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
            PHP-sida 2 Allmänt
        </h2>
        <p>
            mata in några djur i formuläret nedan snälla, sedan flyttas dem runt!!!
        </p>
    </div>
    <div class="formbox">
        <div class="formbox1">
            <form action="" method="post">
            <div class="formboxDiv">
                <label for="djur1">skriv ett djur annars...</label>
                <input type="text" id="djur1ID" name="djur1namn" placeholder="apa..." value="<?php echo isset($_POST['djur1namn']) ? htmlspecialchars($_POST['djur1namn']) : ''; ?>">  <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                <span class="error" style="color: red"> <?php echo !empty($djur1error) ? "*" . $djur1error : ""; ?></span>    <!-- om man inte skriver in ajabaja -->
            </div>
            <div class="formboxDiv">
                <label for="djur2">skriv ett djur annars...</label>
                <input type="text" id="djur2ID" name="djur2namn" placeholder="apa..."  value="<?php echo isset($_POST['djur2namn']) ? htmlspecialchars($_POST['djur2namn']) : ''; ?>"> <!-- sätter value lika med det man skrev in, så försvinner det inte om man klickar ok -->
                <span class="error" style="color: red">  <?php echo !empty($djur2error) ? "*" . $djur2error : ""; ?></span>
            </div>
            <div class="formboxDiv">
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
        echo "<div class='centerBox' style='height: 10%'>                                <!-- 5b, Skriver ut arrayen i råformat med funktionen print_r. -->
            <p>" . print_r($djurArray, true) . "</p>
          </div>";
        $djurArray[2] = "struts";                                   //5c, Ersätter djuret på tredje platsen med djuret ”Struts”.
        array_push($djurArray, "Alpacka");          //5d, Lägger till ett fjärde djur ”Alpacka” sist i arrayen.
        array_splice($djurArray, 0, 1);       //5e, Tar bort det första elementet helt från arrayen.
        echo "<div class='centerBox' style='height: 10%'>                                <!--5f, Skriver ut arrayen i råformat med funktionen print_r.-->
            <p>" . print_r($djurArray, true) . "</p>
            </div>";
        echo "<div class='centerBox' style='height: 10%'>                                <!--5g, Skriver ut elementet som finns på andra platsen i arrayen, vilket nu borde vara ”Struts” eftersom det första djuret är borttaget.-->
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
