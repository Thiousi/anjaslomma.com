<?php

	$clientEmail = $site->email();

	$ctimestamp = get('ctimestamp') + 6;
	$timestamp = time();

    if( strlen(get('username')) > 1 || strlen(get('text')) > 1 || $ctimestamp >= $timestamp ) {
        $check = false;
    } else {
        $check = true;
    }

    if( $check == true ) {

        if(get('submit')) {
            if(get('name') &&
               get('email') &&
               get('message')) {

                $emailName	    = get('name');
                $emailEmail 	= get('email');
                $emailMessage 	= nl2br(get('message'));
                $emailTo		= $clientEmail;
                $emailSubject 	= 'Neue Nachricht vom Kontaktformular';
                $emailFrom		= 'From: '.$emailName.''."<.$emailEmail.>\r\n";
                $emailFrom 	   .= "Mime-Version: 1.0\r\n";
                $emailFrom 	   .= "Content-Type: text/html; charset=utf-8\r\n";
                $emailBody	   .= '<strong>Name</strong>: '.$emailName.'<br><br>';
                $emailBody	   .= '<strong>E-Mail</strong>: '.$emailEmail.'<br><br>';
                $emailBody	   .= '<strong>Nachricht</strong>: <br>'.$emailMessage.'<br><br>';

                $email = mail($emailTo, $emailSubject, $emailBody, $emailFrom);
                //$email = true;

                if($email) {
                    go($page . '/message:sent');
                } else {
                    go($page . '/message:notsent');
                }

            }
        }
    }

?>

<form method="post" action="#contact" id="contact">
    <fieldset>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required="required">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Message *" required="required"></textarea>
        </div>
        <div class="form-group">
            <input class="hidden" type="text" name="username" value="">
            <input class="hidden" type="text" name="text" value="">
            <input class="hidden" type="hidden" name="ctimestamp" value="<?= time() ?>">
            <input name="submit" type="hidden" value="true">
            <button type="submit" class="btn btn-lg">Submit</button>
        </div>
    </fieldset>
</form>

<? if(kirby()->request()->params()->message()): ?>
    <? if(kirby()->request()->params()->message() == 'sent'): ?>
        <div class="alert alert-success alert-dismissible">
            <a type="button" class="close" data-dismiss="alert" href="<?php echo $page->url() ?>"><span aria-hidden="true">&times;</span></a>
            Your message was sent successfully.
        </div>
        <? else: ?>
            <div class="alert alert-warning alert-dismissible">
                <a type="button" class="close" data-dismiss="alert" href="<?php echo $page->url() ?>"><span aria-hidden="true">&times;</span></a>
                Your message could not be sent.
            </div>
    <? endif ?>
<? endif ?>
