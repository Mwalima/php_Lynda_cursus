<?php
$suspect = false;
$patern = '/Content-type:|Bcc:|Cc:';

function isSuspect($value, $patern, &$suspect){
    if(is_array($value)){
        foreach ($value as $item){
            isSuspect($item, $patern, $suspect);
        }
    }else{
        if(preg_match($patern, $value)){
            $suspect = true;
        }
    }
}

isSuspect($_POST,$patern,$suspect);

if(!$suspect):

foreach ($_POST as $key => $value) {
    $value = is_array($value) ? $value : trim($value);
    if (empty($value) && in_array($key, $required)) {
        $missing[] = $key;
        $$key = '';
    } elseif (in_array($key, $expected)) {
        $$key = $value;
    }
}
endif;