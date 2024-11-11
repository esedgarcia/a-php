<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting Page</title>
</head>
<body>
    <h1>Simple Greeting App</h1>

    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the name input from the form
        $name = htmlspecialchars($_POST["name"]);
        
        // Display a greeting message if a name was provided
        if (!empty($name)) {
            echo "<h2>Hello, " . $name . "!</h2>";
        } else {
            echo "<h2>Please enter your name.</h2>";
        }
    }
    ?>

    <!-- Simple form for name input -->
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Greet Me!</button>
    </form>
</body>
</html>
