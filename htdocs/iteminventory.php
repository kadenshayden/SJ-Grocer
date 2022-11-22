<html>
    <head>
        <title>Processing File</title>
</head>
<body>
    <h1>Processing</h1>
    <?php
        if (isset($_POST["itemName"]) && isset ($_POST["itemID"]) && isset($_POST["QTY"])) {
            if ($_POST["itemName"] && $_POST["itemID"] && $_POST["QTY"]) {
                $itemName = $_POST["itemName"];
                $itemID = $_POST["itemID"];
                $QTY = $_POST["QTY"];
 
           
                // Create connection
                $conn = mysqli_connect("localhost", "root", "", "shopINV");

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Add new item (item name, ID, QTY)
                $sql = "INSERT INTO Inventory (itemName, itemID, QTY) VALUES
                        ('$itemName', $itemID', '$QTY')";

                $results = mysqli_query($conn, $sql);

                if ($results) {
                    echo "The item(s) has/have been added";
                } else {
                    echo mysqli_error($conn);
                }

                // Search for item WITH KEYWORDS
                $sql = "SELECT itemName, itemID FROM table
                WHERE (
                        itemName LIKE '%keyword%'
                        OR location LIKE '%keyword%'
                )


                mysqli_close($conn); // close connection

                } else {
                echo "No items found.";
                } 
                //else {
                //echo "From was not submitted. ";
           // }
        }
        ?>