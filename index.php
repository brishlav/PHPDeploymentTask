<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <!-- Include Bootstrap CSS for styling (optional) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Multiplication Table</h1>
        <p class="text-center">Enter a number to display its multiplication table from 1 to 10.</p>

        <!-- Input Form -->
        <form method="post" class="text-center">
            <div class="form-group">
                <input type="number" name="number" class="form-control" placeholder="Enter a number" required />
            </div>
            <button type="submit" class="btn btn-primary">Show Multiplication Table</button>
        </form>

        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the user input
            $number = intval($_POST["number"]);

            echo "<h3 class='mt-5 text-center'>Multiplication Table for $number</h3>";
            echo "<table class='table table-bordered mt-3'>";
            echo "<thead><tr><th>Operation</th><th>Result</th></tr></thead>";
            echo "<tbody>";

            // Generate the multiplication table
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number x $i</td><td>$result</td></tr>";
            }

            echo "</tbody>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
