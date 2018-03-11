<?php

field::$methods['blaa'] = function($field) {
    //thumb
    if(!$field->empty()) {
      return thumb($field->toFile(), array('width' => 300))->url();
      //return $field->toFile()->url();
    }
    return "";
};
