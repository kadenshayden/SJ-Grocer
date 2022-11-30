<html>

<head>
    <title>Processing File</title>
</head>

<body>
    <h1>Logging in . . .</h1>

    <?php
$logged_in = false;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] && $_POST["password"]) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Create connection
        $conn = mysqli_connect("localhost", "root", "", "users");

        // Check connection
        if (!$conn) {
            die("connection failed:" . mysqli_connect_error());
        }

        // Select user
        $sql = "SELECT password FROM students WHERE username = '$username'";

        $results = mysqli_query($conn, $sql);

        if ($results) {
            $row = mysqli_fetch_assoc($results);
            if ($row["password"] === $password) {
                $logged_in = true;
                $sql = "SELECT * FROM students";
                $results = mysqli_query($conn, $sql);
                echo "password correct"; // <------------
            } else {
                echo "password incorrect";

            }
        } else {
            echo mysqli_error($conn);
        }
        mysqli_close($conn); // Close connection
    } else {
        echo "Nothing was submitted";
    }
}
?>

    <html>
    <header>
        <title>User</title>
        <header>

            <body>
                </form>
                <table>
                    <tbody>
                        <?php
            if ($logged_in && $results) {
                while ($row = mysqli_fetch_assoc($results)) {
                    echo "<tr>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "</tr>";
                }
            }


            ?>
                    </tbody>
                </table>
            </body>
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>

    </html>