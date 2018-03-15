<?php

field::$methods['thumbURL'] = function($field) {
    //thumb
    if(!$field->empty()) {
      return thumb($field->toFile(), array('width' => 300))->url();
    }
    return "";
};

field::$methods['bigThumbURL'] = function($field) {
    //thumb
    if(!$field->empty()) {
      return thumb($field->toFile(), array('width' => 800))->url();
    }
    return "";
};

field::$methods['fullURL'] = function($field) {
    //full image
    if(!$field->empty()) {
      return $field->toFile()->url();
    }
    return "";
};
