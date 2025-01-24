<?php
// Ska skapa en array och lägga till varje djur i arrayen
$djurArray = array();

if (isset($_POST['skicka'])) {     //om skicka klicka
    $djur1error = $djur2error = $djur3error = '';  //deklarera

    if (!empty($_POST['djur1namn'])) {  //om tomm
        array_push($djurArray, $_POST['djur1namn']);
    } else { //annars
        $djur1error = "Skriv djur, snälla.";
    }

    if (!empty($_POST['djur2namn'])) {
        array_push($djurArray, $_POST['djur2namn']);
    } else {
        $djur2error = "Skriv djur, snälla.";
    }

    if (!empty($_POST['djur3namn'])) {
        array_push($djurArray, $_POST['djur3namn']);
    } else {
        $djur3error = "Skriv djur, snälla.";
    }
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida 2</title>
    <link rel="stylesheet" href="cssGrejer/main.css">
</head>

<body>
<header class="tjenaHeader">
    <div class="centreragrejenkomigenvarförvillduintevaraicenterjagfårpanik">
        <?php include_once 'navBarGrejsimojs.php'; ?>
    </div>
    <h1 class="mainHeader">Tjena</h1>
</header>

<main class="centerBoxContainer">
    <section class="centerBox" style="width: 60%;">
        <h2>PHP-sida 2 Allmänt</h2>
        <p>
            Mata in några djur i formuläret nedan snälla, sedan flyttas de runt!!!
        </p>
    </section>

    <section class="formbox">
        <div class="formbox1">
            <form action="" method="post">
                <div class="formboxDiv">
                    <label for="djur1namn">Skriv ett djur annars...</label>
                    <input type="text" id="djur1namn" name="djur1namn" placeholder="apa..." value="<?php echo isset($_POST['djur1namn']) ? $_POST['djur1namn'] : ''; ?>">    <!--om variablen är satt, då är value == variabeln, annars är variablen inte satt, då är den ""-->
                                                                                                                                                                             <!--fortsättning, basicly tar man bort denna, så försvinner det du har skrivit in i inputgrejen innan-->
                    <span class="error" style="color: red;"><?php echo !empty($djur1error) ? "*" . $djur1error : ""; ?></span>                            <!--basicär djurerror inte tomt, skriv djur error, ifall man glömmer skriva in grejen-->
                </div>

                <div class="formboxDiv">
                    <label for="djur2namn">Skriv ett djur annars...</label>
                    <input type="text" id="djur2namn" name="djur2namn" placeholder="apa..." value="<?php echo isset($_POST['djur2namn']) ? $_POST['djur2namn'] : ''; ?>">  <!--Samma grej här-->
                    <span class="error" style="color: red;"><?php echo !empty($djur2error) ? "*" . $djur2error : ""; ?></span>
                </div>

                <div class="formboxDiv">
                    <label for="djur3namn">Skriv ett djur annars...</label>
                    <input type="text" id="djur3namn" name="djur3namn" placeholder="apa..." value="<?php echo isset($_POST['djur3namn']) ? $_POST['djur3namn'] : ''; ?>"> <!--Samma grej här-->
                    <span class="error" style="color: red;"><?php echo !empty($djur3error) ? "*" . $djur3error : ""; ?></span>
                </div>

                <button type="submit" id="skickaKnappen" name="skicka">Skicka</button>
            </form>
        </div>

        <?php
        if (sizeof($djurArray) == 3) { // Bara så den inte printar när man laddar sidan
            echo "<div class='centerBox' style='height: 10%;'>
                        <p>" . print_r($djurArray, true) . "</p>
                      </div>";

            // 5c: Ersätter djuret på tredje platsen med "Struts"
            $djurArray[2] = "Struts";

            // 5d: Lägger till ett fjärde djur "Alpacka" sist i arrayen
            array_push($djurArray, "Alpacka");

            // 5e: Tar bort det första elementet helt från arrayen
            array_splice($djurArray, 0, 1);

            echo "<div class='centerBox' style='height: 10%;'>
                        <p>" . print_r($djurArray, true) . "</p>
                      </div>";

            // 5g: Skriver ut elementet som finns på andra platsen i arrayen, vilket nu borde vara "Struts"
            echo "<div class='centerBox' style='height: 10%;'>
                        <p>" . htmlspecialchars($djurArray[1]) . "</p>
                      </div>";
        }
        ?>
    </section>
</main>

<footer>
    <?php include_once 'footer.php'; ?>
</footer>
</body>
</html>
