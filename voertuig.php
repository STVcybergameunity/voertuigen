<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Voertuig.php
        </title>
        <meta chatset="utf-8">
        <meta name='viewport' content="width=divice-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style_voertuigen.css">
    </head>
    <body>
        <h1>Voertuig PHP</h1>
        <form action="voertuig.php" method="get">
            ID: <input type="number" name="id"><br>
        </form>
    </body>
</html>
<?php
require_once 'includes/db.php';
$pdo = connectDB();


$input_waarde = $_GET['id'];

$qry = "SELECT * FROM voertuigen WHERE id = '$input_waarde'";
$qry1 = "SELECT COUNT(id) FROM voertuigen";

$id = $pdo->query($qry);
$id->fetchAll(PDO::FETCH_ASSOC);
$rest = $pdo->query($qry1);
$count = $rest->fetchColumn();

foreach ($pdo -> query($qry) as $convert){
    echo   "<p>" . $convert['id'] . "</p>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Merk</th>
                    <th>Model</th>
                    <th>Bouwjaar</th>
                    <th>Brandstof</th>
                </tr>
                <tr>
                    <td>" . $convert['id'] . "</td>
                    <td>" . $convert['merk'] . "</td>
                    <td>" . $convert['model'] . "</td>
                    <td>" . $convert['bouwjaar'] . "</td>
                    <td>" . $convert['brandstof'] . "</td>
                </tr>
            </table>";
}

if ($count < $input_waarde){
    echo "Voertuig niet gevonden.";
}
if ($input_waarde == ""){
    echo "<p><b>Geen voertuig gekozen.</b></p>";
}
?>