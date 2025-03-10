<?php

$namn = $telefonnr = '';
$namnError = $telError = '';
$method = '';

if (isset($_GET['skickaKnappen'])){   //om get
    $method = 'GET';                  //kommer ihåg om man anävnde en get eller post metod så blire enklare att printa ut sedan
    if (empty($_GET['namn'])){
        $namnError = 'du skrev inget attans namn';
    }else{
        $namn = $_GET['namn'];
    }
    if (empty($_GET['telefonNR'])){
        $telError = 'nu sablar ska du få, du skrev inget telefonNR';
    }else{
        $telefonnr = $_GET['telefonNR'];
    }
}else if (isset($_POST['skickaKnappen'])){    //om post
    $method = 'POST';
    if (empty($_POST['namn'])){
        $namnError = 'du skrev inget förbaskat namn';
    }else{
        $namn = $_POST['namn'];
    }
    if (empty($_POST['telefonNR'])){
        $telError = 'skriv ditt förbenade telefonNR nu';
    }else{
        $telefonnr = trim($_POST['telefonNR']);
    }
}
function getNamn ($namn, $namnError){       //ta emot namn och error, return error om namn inte finns
  return empty($namn) ? $namnError : $namn;
}

function getTel($telefonnr, $telError){
    return empty($telefonnr) ? $telError : $telefonnr;
}





?>


<!DOCTYPE html>
<head>
    <title>Sida 6</title>
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
            PHP-sida 6 Allmänt
        </h2>
        <p>
            Här är en sida som inte gör något speciellt
        </p>
        <div class="formbox">
            <?php

            if (isset($_GET['skickaKnappen']) || isset($_POST['skickaKnappen'])){
                if ($method == 'POST'){       //här bra om man kommer ihåg post så kan man visa att det funkar med olika metoder
                    echo "<p>här är dina Post uppgifter</p>";
                }else if ($method = 'GET'){
                    echo "<p>här är dina Get uppgifter</p>";
                }
                echo "<p>" . getNamn($namn, $namnError) . "</p>";           //echo functionen så slipper man massor med if satser här
                echo "<p>" . getNamn($telefonnr, $telError) . "</p>";       //samma grej här
            }else{
                echo "<p> Järnspikar!!! gå till sida6.html </p>";
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
