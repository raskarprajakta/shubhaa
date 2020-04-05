<?php
                $unit=$_POST['units'];
                    if($unit <= 50)
                    {
                        $bill = $unit*3.50;
                    }
                    elseif($unit > 50 && $unit <= 150)
                    {
                        $temp = 50*3.50;
                        $units_remain = $unit - 50;
                        $bill = $temp + ($units_remain * 4.00);
                    }
                    elseif($unit > 150 && $unit <=250)
                    {
                        $temp = (50*3.50)+ (100*4.00);
                        $units_remain = $unit - 150;
                        $bill = $temp + ($units_remain *5.20);
                    }   
                    else
                    {
                        $temp = (50*3.50)+ (100*4.00)+ (100*5.20);
                        $remaining_units = $unit - 250;
                        $bill = $temp + ($units_remain *6.50);
                    }
                     echo "<br>","Electricity bill for ",$unit," units is ",$bill; 
?>