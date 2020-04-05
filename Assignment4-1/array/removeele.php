<html>
    <head>
        <title> Remove Element</title>
    </head>
<body>

    <?php
        $delete_item = 'july';

        $months = array('jan', 'feb', 'march', 'april', 'may', 'jun', 'july', 'august', 'sep', 'october', 'nov', 'dec');

        var_dump($months);
        echo "<br>";
        echo "Delete july from array<br>";
        if (($key = array_search($delete_item, $months)) != false) 
        {
            unset($months[$key]);
        }
        
        // array after deletion
        var_dump($months);
    ?>

</body>
</html>