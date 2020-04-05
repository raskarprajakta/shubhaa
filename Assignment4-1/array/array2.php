<!DOCTYPE html>
<html>
    <head>
        <title>array</title>
        <h1>Array of Cities</h1>
    </head>
    <body>
        <?php
            $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos",
            "Buenos Aires", "Cairo", "London");
            foreach ($city as $c)
            {
                echo "$c, ";
            }
                
                sort($city);
                echo "<ul>";
            foreach ($city as $y)
            {
                echo "<li>$y</li>";
            }
                echo "</ul>";
            
                array_push($city,"Los Angeles","Calcutta","Osaka","Beijing");
                
                sort($city);
                echo "<ul>";
            foreach ($city as $u)
            {
                echo "<li>$u</li>";
            }
                echo "</ul>";
        ?>
    </body>
</html>