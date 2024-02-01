<!-- ex4.php -->
<?php
$title="Exercise4"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercise 4</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container mt-5 bg-warning">
    <h2>If-Else: Check Voting Eligibility</h2>

    <form method="post" action="ex4.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Eligibility</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];

        if ($age >= 18) {
            echo "<p>$name, you are eligible for voting.</p>";
        } else {
            echo "<p>$name, you are not eligible for voting.</p>";
        }
    }
    ?>

    <hr>

    <h2>Switch Case: Check Current Month</h2>

    <?php
    $currentMonth = date("F");

    switch ($currentMonth) {
        case 'August':
            echo "<p>It's August, so it's still holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
            break;
    }
    ?>

    <hr>

    <h2>For Loop: Multiplication Table</h2>

    <?php
    $numberForTable = 5;

    echo "<p>Multiplication Table for $numberForTable:</p>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $numberForTable * $i;
        echo "<p>$numberForTable x $i = $result</p>";
    }
    ?>

    <hr>

    <h2>While Loop: Print Numbers</h2>

    <?php
    $n = 7;
    $counter = 1;

    echo "<p>Numbers from 1 to $n:</p>";
    while ($counter <= $n) {
        echo "<p>$counter</p>";
        $counter++;
    }
    ?>

    <hr>

    <h2>Foreach Loop: Print Array Elements</h2>

    <?php
    $arrayElements = array("Apple", "Banana", "Cherry", "Date");

    echo "<p>Array Elements:</p>";
    foreach ($arrayElements as $element) {
        echo "<p>$element</p>";
    }
    ?>
</div>

</body>
</html>
