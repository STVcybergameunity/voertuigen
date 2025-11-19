<?php
function connectDB() {
    
$servernaam = "localhost";
$gebruikersnaam = 'root';
$wachtwoord = '';

try {
    $connection = new PDO("mysql:host=$servernaam;dbname=webapp_voertuigen", $gebruikersnaam, $wachtwoord);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Connected</p> <br>";
    $try = true;
}
catch (PDOException $e) {
    echo "Kon geen verbinding maken: " . $e->getMessage();
}
return $connection;
}
?>
