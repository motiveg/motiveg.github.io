<!DOCTYPE html>
<html>
    <head>
        <title>Sample Info</title>
    </head>
    <body>
        <h1>Sample Info</h1>

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

        $result = mysqli_query($conn, "SELECT * FROM sample_data");
        ?>

        <table cellpadding="5" cellspacing="2" border="0">
            <tr>
                <th>Student ID</th><th>Name</th><th>Age</th><th>GPA</th>
            </tr>

            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['studentId']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gpa']; ?></td>
                </tr>
            <?php
            } ?>

            </table>

            <?php
            // Close connection
            $conn->close();
            ?>
    </body>
</html>