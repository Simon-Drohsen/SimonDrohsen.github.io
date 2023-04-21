<!DOCTYPE html>
    <html lang="de">
        <head>
            <meta charset="UTF-8">
            <meta name="theme-color" content="#f5f5f5">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.1">
            <meta name="description" content="Hier können sie jede Schweizerische Telefonnummer evaluieren. Sie wissen dann wo und zu welcher Firma/Person diese Telefonnummer gehört.">
            <title>Telefonnummer Evaluieren</title>
            <link href="style.css" rel="stylesheet">
        </head>

        <body>
            <h1>Telefonnummer Evaluieren</h1>
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="telephone">Telefonnummer:</label>
                <input type="text" name="telephone" id="telephone">
                <button type="submit" name="new" id="new">neue Telefonnummer?</button>
            </form>

            <?php

                $url = 'https://tel.search.ch/api/?was=';
                if(isset($_POST["new"])) {
                    $filtered_result = "";
                    $telephone = "";
                    $response = "";
                    $xml = "";
                }
                else {
                    if(isset($_GET['telephone'])) {
                        $telephone = urlencode($_GET['telephone']);

                        $response = file_get_contents($url . $telephone);

                        $xml = simplexml_load_string($response);
                        if($xml->entry) {
                            $filtered_result = preg_replace("/[^a-zA-Z0-9 ]+/", "", $xml->entry->content);
                            echo '<h2>Infos zur Telefonnummer:</h2>';
                            echo '<p>'.$filtered_result.'</p>';
                        } else {
                            echo '<p>Keine Ergebnisse gefunden.</p>';
                        }
                    }
                }
            ?>
        </body>
    </html>

