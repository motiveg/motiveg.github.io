<!DOCTYPE html>
<html>
    <head>
        <title>Sample Info</title>
    </head>
    <body>

        <!-- link to basic base code, use MySQLi method:
        https://www.w3schools.com/php/php_mysql_insert.asp
        -->

        <!-- prepared statements example:
        https://www.w3schools.com/php/php_mysql_prepared_statements.asp
        -->

        <!-- stackoverflow regarding security:
        https://stackoverflow.com/questions/37367992/php-inserting-values-from-the-form-into-mysql
        -->
        
        <!-- activate when a database is available for use-->
        <?php
        /*
        // check if the form was filled
        if (!empty($_POST["name"]) and !empty($_POST["email"])) {
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

            // SQL command
            $sql = "INSERT INTO sample_info (name, email) VALUES (?,?)";

            // Safety
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $name, $email);
            $name = $_POST["name"];
            $email = $_POST["email"];

            $stmt->execute();
            echo "New record created successfully";

            // Close connection
            $stmt->close();
            $conn->close();
        } else {
            echo "No information entered";
        }
        */
        ?>
        
        <!-- use temporarily when no database is available -->
        <?php
            echo "Information successfully sent!<br>";
            
            echo "<br>";
            $name = $_POST["inputName"];
            $email = $_POST["inputEmail"];
            $comments = $_POST["inputComments"];
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Comments: $comments<br>";
            echo "<br>";
        ?>
        
        <form action="contact.html">
            <input type="submit" value="Go back" style="width: 140px;">
        </form>

    </body>
</html>