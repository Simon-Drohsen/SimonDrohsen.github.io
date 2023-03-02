<?php

$numbers = [];

/**
 * wandelt ein Array in ein String um
 *
 * @param array $array
 * @return string
 */
function arrayToString(array $array): string {
    return implode("", $array);
}

/**
 * Rechnet und gibt summe aus arrayToString($array) aus
 *
 * @param $array
 * @return float|int|string
 */
function calculating($array) {
    switch ($array) {
        case(in_array("+", $array)):
            $sum = explode("+", arrayToString($array));
            return $sum[0] + $sum[1];
            break;
        case (in_array("-", $array)):
            $sum = explode("-", arrayToString($array));
            return $sum[0] - $sum[1];
            break;
        case (in_array("/", $array)):
            $sum = explode("/", arrayToString($array));
            return $sum[0] / $sum[1];
            break;
        case (in_array("*", $array)):
            $sum = explode("*", arrayToString($array));
            return $sum[0] * $sum[1];
            break;
    }
}

// Speichert die gedrückten Knöpfe in einem Array als strings
if(isset($_POST["numbers"])) {
    $numbers = json_decode($_POST["numbers"]);
}
// gibt die gedrückte Zahl aus
if(isset($_POST["number"])) {
    $numbers[] = $_POST["number"];
    json_encode($numbers);
}
// gibt den gedrückten Operator aus
elseif(isset($_POST["operator"])) {
    $numbers[] = $_POST["operator"];
    json_encode($numbers);
} elseif(isset($_POST["point"])) {
    $numbers[] = $_POST["point"];
    json_encode($numbers);
}
// ruft eine Funktion auf und gibt das Resultat aus
elseif(isset($_POST["equal"])) {
    $numbers = [calculating($numbers)];
}
// löscht das Array
elseif(isset($_POST["AC"])) {
    $numbers = [];
}
// rechnet die Wurzel einer Zahl aus
elseif (isset($_POST["root"])) {
    $sum = arrayToString($numbers);
    $sum = sqrt($sum);
    $numbers = [$sum];
    json_encode($numbers);
}
// rechnet eine Zahl hoch 2
elseif (isset($_POST["square"])) {
    $sum = arrayToString($numbers);
    $sum *= $sum;
    $numbers = [$sum];
    json_encode($numbers);
}
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Calculator</title>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.21/dist/css/uikit.min.css" />
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.21/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.21/dist/js/uikit-icons.min.js"></script>

        <link rel="stylesheet" href="../css/calculator-style-php.css">
    </head>

    <body>
        <form action="calculator-index-php.php" method="post" class="calculator" name="calculator">
            <section class="container">
                <div class="uk-container uk-container-small">
                    <div class="uk-flex form">
                        <input class="uk-input uk-form uk-form-width-medium" readonly type="text" name="input" placeholder="0" value="<?php echo arrayToString($numbers) ?>">
                        <input type="hidden" name="numbers" value='<?php echo json_encode($numbers) ?>'>
                    </div>
                    <div class="number-grid" >
                        <input type="submit" name="operator" class="uk-button uk-button-default uk-button-small btn" value='+' id="plus">
                        <input type="submit" name="operator" class="uk-button uk-button-default uk-button-small btn" value='-' id="minus">
                        <input type="submit" name="operator" class="uk-button uk-button-default uk-button-small btn" value='*' id="times">
                        <input type="submit" name="operator" class="uk-button uk-button-default uk-button-small btn" value='/' id="divide">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='7' id="seven">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='8' id="eight">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='9' id="nine">
                        <input type="submit" name="AC" class="uk-button uk-button-default uk-button-small btn" value='AC' id="AC">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='4' id="four">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='5' id="five">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='6' id="six">
                        <input type="submit" name="equal" class="uk-button uk-button-default uk-button-small btn" value='=' id="equal">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='1' id="one">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='2' id="two">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='3' id="three">
                        <input type="submit" name="number" class="uk-button uk-button-default uk-button-small btn" value='0' id="zero">
                        <input type="submit" name="point" class="uk-button uk-button-default uk-button-small btn" value='.' id="point">
                        <input type="submit" name="square" class="uk-button uk-button-default uk-button-small btn" value='²' id="square">
                        <input type="submit" name="root" class="uk-button uk-button-default uk-button-small btn" value='√' id="root">
                    </div>
                </div>
            </section>
        </form>
    </body>
</html>
