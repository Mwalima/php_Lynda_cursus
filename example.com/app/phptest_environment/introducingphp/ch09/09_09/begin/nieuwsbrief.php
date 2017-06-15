<?php

require "header.php";
if ($_SESSION['user_name'] == 'Admin') {

    require_once './connect/mysqldb.php';
    require_once './swiftmailer/lib/swift_required.php';
    $str = 'm.peltenburg@gmail.com';
    trim($str);
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername('m.peltenburg@gmail.com')
            ->setPassword('fhtxbggriemtseot');

    if (isset($_POST["verzend"])) {

        $sql = "SELECT Achternaam, Tussenvoegsel, Voorletters, Geslacht, Email_prive FROM klant";
        $db_handle = DBConnect::getInstance();
        $stmt = $db_handle->prepare($sql);
        $stmt->execute();
        $resultaat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultaat as $userE) {
// voer SQL code uit
        }

        if (count($resultaat) > 0) {

            echo "<p><h2>Verstuur mail</h2><br>";
        }
        // nieuwe nieuwsbrief
        // vervang velden
        if ($userE['Geslacht'] == "m") {
            $aanhef = "heer";
        } else {
            $aanhef = "mevrouw";
        }
        $inhoud = "<br>" . "Beste " . $aanhef . " " . $userE['Tussenvoegsel'] . " " . $userE['Achternaam'];
            
        /* Set locale to Dutch */
        setlocale(LC_ALL, 'nld_nld');

        /* Output: vrijdag 22 december 1978 */
        $datum = strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));


        $inhoud .= "<br>" . "Vandaag " . $datum . " de nieuwsbrief";

        $inhoud .= $_POST["nieuwsbrief"];


        $body = $_POST["onderwerp"] . "<br>" . $inhoud;
        $body = nl2br($body); // vervang enters door <br>

        $geadresseerde = $userE['Voorletters'];
        if ($userE['Tussenvoegsel']) {
            $geadresseerde .= $userE['Tussenvoegsel'];
        }
        $geadresseerde .= $userE['Achternaam'];

        $mailer = Swift_Mailer::newInstance($transport);
        $emailOntvanger = strtolower(ereg_replace(" ", "", $userE["Email_prive"]));


        $message = Swift_Message::newInstance();
        $message->setTo(array($emailOntvanger => $geadresseerde));

        $message->setSubject("Nieuwsbrief " . date('F Y'));
        $message->setBody($body);

        $message->setFrom($str, $_POST["onderwerp"]);
        //$message->attach(Swift_Attachment::fromPath("path/to/file/file.zip"));

        $ok = $mailer->send($message);
        // versturen
        if (!$ok) {
            echo "De mail is niet goed verstuurd!<br>";

            // Wis de mailadressen weer
        }



        echo "Er zijn " . $stmt->rowCount() . " mails verstuurd.";
    } else {
        $sql = "SELECT Email_prive FROM klant";
        $db_handle = DBConnect::getInstance();
        $stmt = $db_handle->prepare($sql);
        $stmt->execute();
        $resultaat = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $emailLijst = array();
        foreach ($resultaat as $userE) {
// voer SQL code uit
            $emailLijst[] = $userE;
           // var_dump($emailLijst);
        }
        echo "<p><div class=\"big\">Nieuwsbrief versturen</div><br>";
        echo "Nieuwsbrief:<br/>";
        echo "<form method=\"POST\" action=\"" . $_SERVER["PHP_SELF"] . "\">";
        echo "Onderwerp: <input type=\"text\" name=\"onderwerp\"><br/>";
        echo "<textarea rows=20 cols=50 name=\"nieuwsbrief\">Type hier uw nieuwsbrief</textarea><br/>";
        
        echo "De volgende mailaccounts kunnen worden geselecteerd:";
        for ($i = 0; $i < count($resultaat); $i++) {

            for ($j = 0; $j <= count($resultaat); $j++) {

                if ($i % 2 == 0) {

                    $lijst = "<ul>";

                    $lijst .= "<ul><input type='checkbox'><label>$emailLijst[$i]</label></ul>";
                }
                if ($j % 2 == 1) {

                    $lijst .= "<ul><input type='checkbox'><label>$emailLijst[$j]</label></ul>";
                    $lijst .="</ul>";
                }
            }
        }
        echo $lijst;
        
        echo "<input type=\"submit\" name=\"verzend\" value=\"verzend\"></form>";
    }
} else {
    require "login.php";
}
require "footer.php";
?>
