<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    require_once './connect/mysqldb.php';
    require './includes/functions.php';
    require './swiftmailer/lib/swift_required.php';
    $str = 'm.peltenburg@gmail.com';
    trim($str);
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
        ->setUsername('m.peltenburg@gmail.com')
        ->setPassword('fhtxbggriemtseot');

    $expected = ['firstname', 'lastname','email', 'comments'];
    $required = ['firstname', 'comments'];
    $to = 'Mwalima Peltenburg <m.peltenburg@gmail.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null;
    $body = "Hello this is a test mail";

    $mailer = Swift_Mailer::newInstance($transport);


    $message = Swift_Message::newInstance();
    $message->setTo($to);

    $message->setSubject($subject . date('F Y'));
    $message->setBody($body);

    $message->setFrom($str, $subject);
    //$message->attach(Swift_Attachment::fromPath("path/to/file/file.zip"));

    $ok = $mailer->send($message);
    // versturen
    if (!$ok) {
        echo "De mail is niet goed verstuurd!<br>";

        // Wis de mailadressen weer
    }else {
        $db_handle = DBConnect::getInstance();
        $insert = new Mysql($db_handle);
        $insert->insertPerson($_POST['firstname'],$_POST['lastname'], $_POST['email']);


        require './includes/process_mail.php';
        if ($mailSend) {
            header(['Location: thanks.php']);
            exit;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Message body</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
<p class="warning">Sorry, your mail couldn't be sent.</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="firstname">fistname:
    <?php if ($missing && in_array('firstname', $missing)) : ?>
        <span class="warning">Please enter your name</span>
    <?php endif; ?>
    </label>
    <input type="text" name="firstname" id="firstname"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($name) . '"';
        }
        ?>
        >
  </p>
    <label for="lastname">lastname:
        <?php if ($missing && in_array('lastname', $missing)) : ?>
            <span class="warning">Please enter your name</span>
        <?php endif; ?>
    </label>
    <input type="text" name="lastname" id="lastname"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($name) . '"';
        }
        ?>
    >
    </p>
  <p>
    <label for="email">Email:
        <?php if ($missing && in_array('email', $missing)) : ?>
            <span class="warning">Please enter your email address</span>
        <?php elseif (isset($errors['email'])) : ?>
            <span class="warning">Invalid email address</span>
        <?php endif; ?>
    </label>
    <input type="email" name="email" id="email"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($email) . '"';
        }
        ?>
        >
  </p>
  <p>
    <label for="comments">Comments:
        <?php if ($missing && in_array('comments', $missing)) : ?>
            <span class="warning">You forgot to add any comments</span>
        <?php endif; ?>
    </label>
      <textarea name="comments" id="comments"><?php
          if ($errors || $missing) {
              echo htmlentities($comments);
          }
          ?></textarea>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>

</body>
</html>