<?php

function contact($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'naam'  => get('naam'),
      'email' => get('email'),
      'subject' => get('subject'),
      'body' => get('body')
    );
    $rules = array(
      'naam'  => array('required'),
      'email' => array('required', 'email')
    );
    $messages = array(
      'naam'  => 'Geef a.u.b. een geldige naam op',
      'email' => 'Geef a.u.b. een geldig e-mail adres op'
    );
    var_dump($data);
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'info@makereducation.nl',
        'from'    => 'contact@makereducation.nl',
        'subject' => 'Contactformulier',
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
}

function voucher($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'naam'  => get('naam'),
      'email' => get('email'),
      'type' => get('type'),
      'namelijk' => get('namelijk'),
      'adres' => get('adres'),
      'website' => get('website'),
      'brin' => get('brin'),
      'contactpersoon' => get('contactpersoon'),
      'partnername' => get('partnername'),
      'typepartner' => get('typepartner'),
      'partneradres' => get('partneradres'),
      'partnerwebsite' => get('partnerwebsite'),
      'partnerkvk' => get('partnerkvk'),
      'partnercontact' => get('partnercontact'),
      'partneremail' => get('partneremail'),
      'typeactiviteit' => get('typeactiviteit'),
      'activiteitbijdrage' => get('activiteitbijdrage'),
      'voorwie' => get('voorwie'),
      'activiteitbeschrijving' => get('activiteitbeschrijving')
    );
    $rules = array(
      'naam'  => array('required'),
      'email' => array('required', 'email'),
      'partneremail' => array('required', 'email')
    );
    $messages = array(
      'naam'  => 'Geef a.u.b. een geldige naam op',
      'email' => 'Geef a.u.b. een geldig e-mail adres op',
      'partneremail' => 'Geef a.u.b. een geldig e-mail adres op'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('vouchermail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'lodewijk@waag.org',
        'from'    => 'voucher@makereducation.nl',
        'subject' => 'Nieuwe voucher aanvraag',
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
}

function kaart($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'naam'  => get('naam'),
      'email' => get('email'),
      'type' => get('type'),
      'adres' => get('adres'),
      'website' => get('website'),
      'bericht' => get('bericht'),
      'contactpersoon' => get('contactpersoon')
    );
    $rules = array(
      'naam'  => array('required'),
      'email' => array('required', 'email')
    );
    $messages = array(
      'naam'  => 'Geef a.u.b. een geldige naam op',
      'email' => 'Geef a.u.b. een geldig e-mail adres op',
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
        'to'      => 'lodewijk@waag.org',
        'from'    => 'kaart@makereducation.nl',
        'subject' => 'Nieuwe kaart aanvraag',
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
}

function agenda($site, $pages, $page) {
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
}

return function($site, $pages, $page) {
  switch ($page->id()) {
    case "contact":
        return contact($site, $pages, $page);
    case "voucher":
        return voucher($site, $pages, $page);
    case "kaart":
        return kaart($site, $pages, $page);
    case "agenda":
        return agenda($site, $pages, $page);
    default:
        break;
  }
  return;
};
