<!DOCTYPE html>
<html>
<head>
    <title>Leeftijd per minuut calculator</title>
    <style>
        body {
            background-color: #000016;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #3a6cf4;
            font-size: 32px;
            text-align: center;
        }
        form {
            margin: 0 auto;
            max-width: 400px;
            text-align: center;
        }
        input[type="submit"] {
            background-color: #3a6cf4;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            padding: 10px 20px;
        }
        input[type="date"] {
            border: none;
            border-radius: 5px;
            font-size: 18px;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
<h1>Leeftijd per minuut calculator</h1>
<form method="post">
    <label for="birthdate">Geboortedatum:</label>
    <input type="date" id="birthdate" name="birthdate" required>
    <input type="submit" value="Bereken leeftijd per minuut">
</form>

<?php
if (isset($_POST['birthdate'])) {
    $birthdate = strtotime($_POST['birthdate']);
    $age_in_minutes = (time() - $birthdate) / 60;
    echo "<p>Je bent " . number_format($age_in_minutes, 2) . " minuten oud.</p>";
}
?>
</body>
</html>