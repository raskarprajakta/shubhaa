<html>
    <head>
        <title>
            Factorial
        </title>
        Count Factorial of a number
    </head>
    <body>
        <?php
        $fact=1;
        $number=$_POST['num'];
        if($number==0)
        {
            $fact=1;
        }
        elseif($number<0)
        {
            echo "Negative numbers are out of scope of this";
            $fact=$number;
        }            
            else{
        for ($i=$number; $i >0 ; $i--) { 
            $fact=$fact*$i;
        }}
        echo "<br><br>Factorial of" $number "is" $fact;
        ?>
    </body>
</html>