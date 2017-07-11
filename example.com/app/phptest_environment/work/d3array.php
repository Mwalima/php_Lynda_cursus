<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 11-7-17
 * Time: 12:06
 */
$rgbArray= array([0][0][0]);


for($i = 0; $i < 9; $i ++ ){

    for($j = 0; $j < 9; $j++){


        $colors = array(
            0=>'red',
            1=>'blue',
            2=>'purple',
            3=>'yellow',
            4=>'green',
            5=>'white',
            6=>'orange',
            7=>'pink',
            8=>'gray',
            9=>'black'
        );

        foreach($colors as $color){
            //dd($colors);
            $grid = "<table>";
            $grid .= "<tr>";
            for($k=0; $k <= count($colors); $k++)
            {
                $grid .= "<td>";

                $grid .= "</td>";
            }
            $grid .= "</tr>";
        }
        $grid = "</table>";
    }
    echo $grid;
}