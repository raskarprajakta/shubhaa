<html>
    <head>
    <title>Chess</title>
    Chess : <br>
    </head>
    <body>
      <table width=270px border=1px>
      <?php
      for( $i=0; $i<10; $i++ )
      { echo "<tr>";
         for( $j=0; $j<10; $j++)
         {
            if (($i+$j)%2==0){
                echo " <td height=40px width=40px bgcolor=#FFFFFF></td> ";
            }
            else{
                echo " <td height=40px width=40px bgcolor=#000000></td> ";  
            }
         }
         echo '</tr>';

      }
        ?>

      </table>
    </body>
</html>