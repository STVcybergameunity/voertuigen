<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Voertuigen.php
        </title>
        <meta chatset="utf-8">
        <meta name='viewport' content="width=divice-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style_voertuigen.css">
    </head>
</html>
<?php
include_once 'includes/db.php';

$pdo = connectDB();

if ($try == true);
    echo"<h1> Autos PHP</h1>";
$qry = 'SELECT * FROM voertuigen';
$voertuig = $pdo -> query($qry);

$voertuig ->fetchall(PDO::FETCH_ASSOC);

foreach ($pdo -> query($qry) as $test){
    echo   "<p>" . $test['id'] . "</p>
            <table>
                <tr>
                    <th>Merk</th>
                    <th>Model</th>
                    <th>Bouwjaar</th>
                    <th>Brandstof</th>
                </tr>
                <tr>
                    <td>" . $test['merk'] . "</td>
                    <td>" . $test['model'] . "</td>
                    <td>" . $test['bouwjaar'] . "</td>
                    <td>" . $test['brandstof'] . "</td>
                </tr>
            </table>";
}
$connection = null;
if ($connection == null) {
    echo "<br> <p>END</p>";
}
?>
