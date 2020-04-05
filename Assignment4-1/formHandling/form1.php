<html>
    <body>
    <?php
             if(isset($_POST['Calculate'])) 
            {
                $first=$_POST['no1'];
                
                $second=$_POST['no2'];
            
                if( !empty($first) && !empty($second)   )
                {
                    $operation=$_POST['oper'];
                   
                    switch($operation)
                    {
                        case "add":$value= $first+$second;
                                    echo $first ."+".$second."=".$value;
                                    break;
                        case "subtract":$value= $first-$second;
                                    echo $first ."-".$second."=".$value;
                                    break;          
                        case "multiply":$value= $first*$second;
                                    echo $first ."x".$second."=".$value;
                                    break;
                        case "divide": $value=$first1/$second1;
                                    echo $first ."/".$second."=".$value;
                                    break;
                    }                
                }
            }
        ?>        
    </body>

</html>