<html>
    <head>
        <title>
            Count display
        </title>
        Display Count from 5 to 15
    </head>
    <body>
        <?php
        $count=0;
        for ($i=5; $i <=15 ; $i++) { 
            echo "<br>The number is: $i";
            $count+=$i;
        }
        echo "<br><br>Addition count is $count"
        ?>
    </body>
</html>