<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion Results</title>
</head>
<body>
    <h1>Conversion Results</h1>

    <section>
<?php   
    $browserUA = $_SERVER["HTTP_USER_AGENT"];

    var_dump($browserUA);
    // var_dump($_SERVER);

    if(isset($_POST["amount"]) && isset($_POST["crypto"])){

         // Superglobal Variables
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];

        echo "<p> You want to convert $amount $crypto</p>";
    } else{ 
        echo "<h2>Oops! It didn't work. Please try again properly</h2>";
    }

?>
    </section>
</body>
</html>