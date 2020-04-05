<html>
    <head>

    </head>
    <body>
        <?php
           
            
            if(isset($_POST['submit'])) 
            {
                $city=$_POST['city'];
            
                if( !empty($city)  )
                {    $countries=array("Tokyo"=>" Japan", "Mexico City"=> "Mexico", "New York City"=> "USA", "Mumbai"=>"India", "Seoul"=>"Korea","Shanghai"=>"China", "Lagos"=>"Nigeria",
                    "Buenos Aires"=> "Argentina", "Cairo"=> "Egypt", "London" => "England");
                    foreach($countries as $country=>$countryvalue)
                    {
                        if($country==$city)
                        {
                            echo $city." is in ".$countryvalue ;
                        }
                    }
                                  
                }
            }
        ?>
    </body>
</html>