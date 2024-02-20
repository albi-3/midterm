<head>
    <title>food</title>
</head>
<body>
    <form method="post" action="delete-food.php">
        <label for="food">Foods *</label>
        <select name="name" id="name" required>
            <?php
            // connect
            include('shared/db.php');
            // set up & run query, store data results
            $sql = "SELECT * FROM foods ORDER BY name";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $name = $cmd->fetchAll();
            foreach ($name as $name) {
                echo '<option>' . $name['name'] . '</option>';
            }
            // disconnect
            $db = null;
            ?>
        </select>
    </form>
</body>
</html>
