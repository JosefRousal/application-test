<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script type="text/javascript">
            function alertInformation(f, l, e) {
                alert(
                        "Name: " + f + " " + l + "\n" +
                        "Email: " + e
                        );
            }
        </script>

        <?php
        $people = array(
            array('id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'),
            array('id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'),
            array('id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'),
            array('id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'),
            array('id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com')
        );
        echo "<table>";
        foreach ($people as $array) {
            $fname = $array['first_name'];
            $lname = $array['last_name'];
            $email = $array['email'];
            echo "<tr>";
            echo "<td>" . $array['id'] . "</td>";
            echo "<td>" . $fname . "</td>";
            echo "<td>" . $lname . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td><button onclick='alertInformation(\"" . $fname . "\",\"" . $lname . "\",\"" . $email . "\")'>Display Information</button></td>";
            echo "</tr>";
        }
        echo "<table>";
        ?>
    </body>
</html>
