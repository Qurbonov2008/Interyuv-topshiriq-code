<?php
class Palidrom_number
{


    public function palidrom($x)
    {
        if($x<0)
        {
            return false;
        }
        $original_number = $x;
        $revirsed = 0;


        while($x>0)
        {
           $revirsed = $revirsed*10+$x%10;
           $x = (int)($x / 10);
        }

        if($original_number == $revirsed)
        {
            return true;
        }else{
            return false;
        }



    }

}


$palidrom  = new Palidrom_number();

$palidrom->palidrom(10);