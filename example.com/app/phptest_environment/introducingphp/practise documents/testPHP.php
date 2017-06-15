<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 9-8-16
 * Time: 15:39
 */
$vakken_invoer = "asdf,asdf,asdf";
$vakken_invoer = explode(",",$vakken_invoer);
if(isset($vakken_invoer)){
    if(is_array($vakken_invoer)){
        foreach ($vakken_invoer as $key=>$value){
            if($key == count($vakken_invoer)){
                $vakken_invoer .= ' ' . getMessage('common.and') . ' ';
            }else{
                $vakken_invoer = implode(', ', $vakken_invoer);
            }

        }
            }else{
                $vakken_invoer;
    }
}
echo $vakken_invoer;
?>
</body>
</html>