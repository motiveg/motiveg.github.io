<!DOCTYPE html>
<html>
    <head>
        <title>Quotes</title>
    </head>
    <body>
        <h1>Quotes</h1>

        <!-- link to basic base code, use MySQLi method:
        https://www.w3schools.com/php/php_mysql_insert.asp
        -->

        <!-- prepared statements example:
        https://www.w3schools.com/php/php_mysql_prepared_statements.asp
        -->

        <!-- stackoverflow regarding security:
        https://stackoverflow.com/questions/37367992/php-inserting-values-from-the-form-into-mysql
        -->

        <?php
        $servername = "setapproject.org";
        $username = "csc412";
        $password = "csc412";
        $dbname = "csc412";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // check if form was filled
        if (!empty($_POST["quote"]) and ! empty($_POST["name"])) {
            // SQL command
            $sql = "INSERT INTO sample_quotes (quote, name) VALUES (?,?)";

            // Safety
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $quote, $name);
            $quote = $_POST["quote"];
            $name = $_POST["name"];
            $stmt->execute();

            // close stmt
            $stmt->close();
        } else {
            echo "No information was entered<br><br>";
        }

        $result = mysqli_query($conn, "SELECT * FROM sample_quotes");

        while ($row = mysqli_fetch_array($result)) {
            echo "\"" . $row['quote'] . "\" - " . $row['name'];
            echo "<br>";
        }
        echo "<br>";

        // Close connection
        $conn->close();
        ?>

        <!-- SEARCH FORM -->
        <form action="quotes.php?go" method="post">
            <input type="text" name="searchstring" style="width:400px;">
            <input type="submit" name="submit" value="Search">
        </form>

        <?php
        // FIXME: search form in progress
        /*if (isset($_POST['submit'])) {
            if (isset($_GET['go'])) {
                if (preg_match("^/[A-Za-z]+/", $_POST['searchstring'])) {
                    $searchstring = $_POST['searchstring'];
                }
            } else {
                echo "<p>Please enter a search query</p>";
            }
        }*/
        ?>
    </body>
</html>