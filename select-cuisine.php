<!DOCTYPE html>
<html>
<head>
    <title>Select Cuisine</title>
</head>
<body>
    <form method="post" action="foods.php">
        <label for="Cuisine">Cuisine: *</label>
        <select name="name" id="name" required>
            <?php
            // connect
            include('shared/db.php');

            // set up & run query, store data results
            $sql = "SELECT * FROM cuisines ORDER BY name";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $name = $cmd->fetchAll();

            // loop through list of services, adding each one to dropdown 1 at a time
            foreach ($name as $name) {
                echo '<option>' . $name['name'] . '</option>';
            }
            // disconnect
            $db = null;
            ?>
        </select>
        <button class="offset-button">Get Foods</button>
    </form>
    </body>
</html>