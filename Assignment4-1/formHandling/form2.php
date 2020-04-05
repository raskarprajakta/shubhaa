<html>
    <body>
    <?php
             if(isset($_POST['submit'])) 
            {
                $username=$_POST['uname'];
            
                if( !empty($username)  )
                {   
                    if(isset($_POST["mycolor"]) && is_array($_POST["mycolor"])){
                        echo "Username is ".$username."<br> >";

                        $colors = implode("<br> >", $_POST["mycolor"]);
                        echo $colors;
                       
                        
                        
                    }           
                }
            }
        ?>        
    </body>

</html>