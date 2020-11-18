<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";    
        $response = file_get_contents($url);
        $data = json_decode($response);
        echo "<div class='container text-center'>";

        foreach ($data->tracks->items as $n => $v) {
            echo "<img  src='".$v->album->images[0]->url."' height='".$v->album->images[0]->height."' width='".$v->album->images[0]->width."'><br>";
            echo "<h4>".$v->album->name."</h4><br>";
            echo "Artist: ".$v->album->artists[0]->name."<br>";
            echo "Release Date: ".$v->album->release_date."<br>";
            echo "Avaliable: ".sizeof($v->album->available_markets)."<br><br><hr>";

            
        }
        
        echo "</div>";

    ?>
</body>
</html>