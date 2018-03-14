<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */
// an email address that will be in the From field of the email.
$from = 'Demo contact form <caseymoths@outlook.com>';
// an email address that will receive the email with the output of the form
$sendTo = 'Demo contact form <caseymoths@outlook.com>';
// subject of the email
$subject = 'New message from contact form';
// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');
// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, we will get back to you soon!';
// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';
/*
 *  LET'S DO THE SENDING
 */
// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{
  if(count($_POST) == 0) throw new \Exception('Form is empty');

  $emailText = "You have a new message from your contact form\n=============================\n";

  foreach ($_POST as $key => $value) {
    // If the field exists in the $fields array, include it in the email
    if (isset($fields[$key])) {
        $emailText .= "$fields[$key]: $value\n";
    }
  }
  // All the neccessary headers for the email.
  $headers = array('Content-Type: text/plain; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
  );
  // Send email
  mail($sendTo, $subject, $emailText, implode("\n", $headers));

  $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
  $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}
// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  $encoded = json_encode($responseArray);

  header('Content-Type: application/json');

  echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
?>

<form id="contact-form" method="post" action="/php/contact.php" role="form">
  <h2>Contact Us</h2>
  <div class="messages"></div>

  <div class="controls">

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label for="form_name">First Name <strong id="star">*</strong></label>
            <input id="form_name" type="text" name="name" class="form-control"  required="required" data-error="Firstname is required.">
            <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label for="form_lastname">Last Name <strong id="star">*</strong></label>
            <input id="form_lastname" type="text" name="surname" class="form-control"  required="required" data-error="Lastname is required.">
            <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label for="form_email">Email <strong id="star">*</strong></label>
            <input id="form_email" type="email" name="email" class="form-control"  required="required" data-error="Valid email is required.">
            <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label for="form_phone">Phone</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" >
            <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="form_message">Message <strong id="star">*</strong></label>
          <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="Please,leave us a message."></textarea>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12">
        <input type="submit" class="btn btn-success btn-send" value="Send message" id="book">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-muted"><strong id="star">*</strong> These fields are required.</p>
      </div>
    </div>
  </div>

</form>
