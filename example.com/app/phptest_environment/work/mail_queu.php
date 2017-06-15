<?php
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 03/10/16
 * Time: 09:50
 */
$msg = array('fromaddress'=>'annanow11@gmail.com',
    'toaddress'=>'info@studentsplus.nl',
    'subject'=>'Bezwaar factuur november en december DaniÃ«l Nowicki     ',
    'body'=>'Besproken uitzondering Geachte mevrouw Nowicka,
Zoals zojuist telefonisch besproken, bevestig ik hierbij de uitzondering die wij voor u hebben gemaakt met betrekking tot het bijlespakket van Daniël: De overgebleven uren van het bijlespakket van juni (4 uur) mogen ook in oktober ingehaald worden.',
    'attachment'=>'czowOiIiOw==',
    'ccaddress'=>'sdfasdf@sdfgsd.nl'
);


$uid = 12345667;
$mq=array(
    'uid' => $uid,
    'soort' => 'IN',
    'from' => $msg['fromaddress'],
    'to' => $msg['toaddress'],
    'subject' => utf8_decode(trim($msg['subject'])),
    'content' => base64_encode($msg['body']),
    'attachment' => base64_encode(serialize($msg['attachment'])),
    'maildate' => date('Y-m-d H:i:s'),
    'cc' => $msg['ccaddress']
);

foreach ($mq as $key => $value){

    echo $key.'--'.$value.'<br>';
}
