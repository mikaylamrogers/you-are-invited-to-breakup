<!DOCTYPE HTML>
<HTML>
<head>
<title>Congratulations, You Just Brokeup!</title>
    <!-- <link href="written.css" type="text/css" rel="stylesheet" /> -->
</head>
<body>    

<h1>CONGRATULATIONS ON BREAKING UP!</h1>

<?php
$url = parse_url(getenv("mysql://b7eb69c7de4c8b:ed3447d4@us-cdbr-east-06.cleardb.net/heroku_2ebf4257da5c43d?reconnect=true"));
// Connect to MySQL server
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'gallery_letters';
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$name1 = mysqli_real_escape_string($conn, $_POST['name1']);
$blank1 = mysqli_real_escape_string($conn, $_POST['blank1']);
$blank2 = mysqli_real_escape_string($conn, $_POST['blank2']);
$blank3 = mysqli_real_escape_string($conn, $_POST['blank3']);
$blank4 = mysqli_real_escape_string($conn, $_POST['blank4']);
$name2 = mysqli_real_escape_string($conn, $_POST['name2']);

// Insert user input into database table
$sql = "INSERT INTO letters (name1, blank1, blank2, blank3, blank4, name2)
VALUES ('$name1', '$blank1', '$blank2', '$blank3', '$blank4', '$name2')";

if (mysqli_query($conn, $sql)) {
    // Redirect user to another page to display all letters
    header('Location: display_letters.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
