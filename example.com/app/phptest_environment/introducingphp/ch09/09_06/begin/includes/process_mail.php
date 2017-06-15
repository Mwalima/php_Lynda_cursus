<?php
$suspect = false;
$pattern = '/Content-type:|Bcc:|Cc:/i';

function isSuspect($value, $pattern, &$suspect) {
    if (is_array($value)) {
        foreach ($value as $item) {
            isSuspect($item, $pattern, $suspect);
        }
    } else {
        if (preg_match($pattern, $value)) {
            $suspect = true;
        }
    }
}

isSuspect($_POST, $pattern, $suspect);

if (!$suspect) :
    foreach ($_POST as $key => $value) {
        $value = is_array($value) ? $value : trim($value);
        if (empty($value) && in_array($key, $required)) {
            $missing[] = $key;
            $$key = '';
        } elseif (in_array($key, $expected)) {
            $$key = $value;
        }
    }
    //validate users emaili
    if(!$missing && !empty($email)):
        $validemail = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            if($validemail){
                $headers[] = "Reply-to: $validemail";
            }else{
                $errors['email'] = true;
            }
    endif;
    //if no errors create headers and message body
    if(!$errors && !$missing){
        $headers = implode("\r\n",$headers);
    }

endif;