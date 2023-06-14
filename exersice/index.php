<?php
$url = 'https://the-trivia-api.com/v2/questions';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

$temp = $data['data']['timelines'][0]['intervals'][0]['values']['temperature'];
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Wetter in Sempach</title>
            <link href="style.css" rel="stylesheet">
        </head>

        <body>
            <section>
                <div class="container mx-auto">
                    <form action="index.php" method="post">
                        <label> Category: &empty;
                            <select name = "Category" multiple size="10">
                                <option value = "music">Music</option>
                                <option value = "sport_and_leisure">Sport and Leisure</option>
                                <option value = "film_and_tv">Film and TV</option>
                                <option value = "arts_and_literature">Art and Literature</option>
                                <option value = "history">History</option>
                                <option value = "society_and_culture">Society and Culture</option>
                                <option value = "science">Science</option>
                                <option value = "geography">Geography</option>
                                <option value = "food_and_drink">Food and Drink</option>
                                <option value = "general_knowledge">General Knowledge</option>
                            </select>
                        </label>
                        <label> Easy: &empty;
                            <input value="easy" type="radio">
                        </label>
                        <label> Medium: &empty;
                            <input value="medium" type="radio">
                        </label>
                        <label> Hard: &empty;
                            <input value="hard" type="radio">
                        </label>
                    </form>
                </div>
            </section>
        </body>
    </html>
