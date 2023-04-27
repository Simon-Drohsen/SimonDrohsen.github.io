<?php
$url = 'https://api.tomorrow.io/v4/timelines';
$location = '47.1341481,8.1933634';
$fields = 'temperature';
$timesteps = '1m';
$units = 'metric';
$apikey = 'ilk1aLSD8b5CgNz9i5IOYQgkdFfvhkJf';

$url .= '?location=' . urlencode($location) . '&fields=' . urlencode($fields) . '&timesteps=' . urlencode($timesteps) . '&units=' . urlencode($units) . '&apikey=' . urlencode($apikey);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

$temp = $data['data']['timelines'][0]['intervals'][0]['values']['temperature'];
?>

<!DOCTYPE html>
    <html lang="ch">
        <head>
            <title>Wetter in Sempach</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
            <link href="style.css" rel="stylesheet">
        </head>

        <body>
            <h1>Temperatur in Sempach: <?php echo $temp; ?> &deg;C</h1>
        </body>
    </html>