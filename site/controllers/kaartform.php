<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'type' => get('type'),
      'adres' => get('adres'),
      'website' => get('website'),
      'bericht' => get('bericht'),
      'contactpersoon' => get('contactpersoon')
    );
    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email')
    );
    $messages = array(
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('kaartmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'mariska@waag.org',
        'from'    => 'kaart@makereducation.nl',
        'subject' => 'Nieuwe kaart aanvraag',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('zet-jezelf-op-de-kaart/bedankt');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};
