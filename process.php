<html>

<head>
    <title>Processing File</title>
</head>

<body>
    <h1>User Added!</h1>
    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] && $_POST["password"]) {
            $username = $_POST["username"];
            $password = $_POST["password"];


            // Create connection
            $conn = mysqli_connect("localhost", "root", "", "users");

            //if ($_POST["username"] === $username) {
            //    echo "Duplicate entries aren't permitted. Please go back a page. ";
            //echo "<script> location.href='http://localhost/registration.html'; </script>"; // Can't figure out how to make work well enough.
            //} // XAMPP IS ALREADY CONFIGURED TO NOT ALLOW DUPES, it would be nice to have a redirect page though.
    
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Register user
            $sql = "INSERT INTO students (username, password) VALUES
                        ('$username', '$password')";

            $results = mysqli_query($conn, $sql);

            if ($results) {
                echo "The user has been added";
            } else {
                echo mysqli_error($conn);
            }

            mysqli_close($conn); // close connection
    
        } else {
            echo "Username or password is empty. ";
        }
        //else {
        //echo "From was not submitted. ";
        // }
    }

    ?>
    <form>
        <input type="button" value="Go back!" onclick="history.back()">
    </form>