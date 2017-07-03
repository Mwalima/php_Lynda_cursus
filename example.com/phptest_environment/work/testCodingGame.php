<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 9-5-17
 * Time: 9:37
 */

$H = 4;
$L = 5;

function ARTaRRY($H,$number, $ROW, $L, $j){
    $number = 26;
    $loop = array($H-1,$number);
    $loop =substr($ROW,(($j-1) *$L)-$L-1,$L);
    return $loop;

}


    for ($i = 0; $i < $H-1; $i++) {
        $ROW ="\n";

        for ($j = 0; $j < 26; $j++) {

            ARTaRRY($H,26, $ROW, $L, $j);
            //var_dump(ARTaRRY($H,26, $ROW, $L, $j));
        }
    }


            $indexArry=("ABCDEFGHIJKLMNOPQRSTUVWXYZ?");
            $indexArry=str_split($indexArry);

            $T ='e';
            $T = strtoupper($T);
            $T = str_split($T);

            $outputline = "";
            //var_dump($textletter);
            foreach ($T as $item){

                for($i =0; $i < count($T);$i++) {
                    if($index = array_search($T[$i], $indexArry)){
                        echo " value found";

                        //foreach (ARTaRRY(0,$index,$ROW, $L, $j) as $newArtArry) {
                            //$textFormat=array_push($newArtArry;
                            //var_dump($newArtArry);
                            $outputline .= $outputline . ARTaRRY(0,$index,$ROW, $L, $j) ;
                            echo $outputline;
                        //}
                    }


                }
            }



//function left($str, $length) {
//    return substr($str, 0, $length);
//}
//
//function right($str, $length) {
//    return substr($str, -$length);
//}

//$colums = 0;
//foreach ($textletter as $key=>$item) {
//    $colums++;
//
//    if($colums <= count($textletter)) {
//        $colums = 0;
 //       ascii(4, 5);
//        echo '</br>';
//    }else{
//        echo '</br>';
//
//    }
//
//}


//define('STDIN',ascii(1,2) );
//$example = STDIN;
//print "\nYou typed: $example\n";
//fscanf(STDIN, "%d",
//    $L
//);
//fscanf(STDIN, "%d",
//    $H
//);
//$T = stream_get_line(STDIN, 256 + 1, "\n");
//for ($i =0; $i < $H; $i++)
//{
//    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
//    for ($H= 1; $H <= $L; $H++)
//    {
//        $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
//    }
//}
//error_log(var_export($L, true));
//error_log(var_export($H, true));