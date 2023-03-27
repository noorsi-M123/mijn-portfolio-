<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Steen, Papier, Schaar</title>
    <style>
        body {
            background-color: #000016;
            color: #fff;
            font-family: sans-serif;
            font-size: 24px;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 50px;
            font-size: 48px;
        }

        button {
            background-color: #3a6cf4;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 24px;
            padding: 10px 20px;
            margin-top: 50px;
            cursor: pointer;
        }

        @media only screen and (max-width: 768px) {
            h1 {
                font-size: 36px;
            }

            button {
                font-size: 18px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
<h1>Steen, Papier, Schaar</h1>

<?php
// Define possible choices
$choices = array("steen", "papier", "schaar");

// Check if user made a choice
if (isset($_POST["user_choice"])) {
    $user_choice = $_POST["user_choice"];

    // Get computer's choice
    $computer_choice = $choices[rand(0, 2)];

    // Determine winner
    if ($user_choice == $computer_choice) {
        $result = "Gelijkspel!";
    } elseif ($user_choice == "steen" && $computer_choice == "schaar" ||
        $user_choice == "papier" && $computer_choice == "steen" ||
        $user_choice == "schaar" && $computer_choice == "papier") {
        $result = "Je hebt gewonnen!";
    } else {
        $result = "Je hebt verloren!";
    }

    echo "<p>Je koos: " . ucfirst($user_choice) . "</p>";
    echo "<p>De computer koos: " . ucfirst($computer_choice) . "</p>";
    echo "<p>Resultaat: " . $result . "</p>";
}

// Display choices for user
?>
<form method="post">
    <button type="submit" name="user_choice" value="steen">Steen</button>
    <button type="submit" name="user_choice" value="papier">Papier</button>
    <button type="submit" name="user_choice" value="schaar">Schaar</button>
</form>
</body>
</html>
