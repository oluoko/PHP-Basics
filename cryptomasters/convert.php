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
    require_once "classes/converter.php";    
  
    if(isset($_POST["amount"]) && isset($_POST["crypto"])){

         // Superglobal Variables
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];

        
        $converter = new Converter($crypto);

        echo "<p> You want to convert $amount $crypto</p>";
    } else{ 
        echo "<h2>Oops! It didn't work. Please try again properly</h2>";
    }

?>
    </section>
</body>
</html>