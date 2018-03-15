<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'activiteit'  => get('activiteit'),
      'datum' => get('datum'),
      'adres' => get('adres'),
      'email' => get('email'),
      'website' => get('website'),
      'bericht' => get('bericht'),
    );
    $rules = array(
      'email' => array('required', 'email')
    );
    $messages = array(
      'email' => 'Geef a.u.b. een geldig e-mail adres op'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('agendamail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'karien@waag.org',
        'from'    => 'agenda@makereducation.nl',
        'subject' => 'Nieuwe agenda aanvraag',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('bedankt');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};
