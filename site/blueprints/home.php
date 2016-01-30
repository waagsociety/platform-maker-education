<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  heroimage:
    label: Hero image
    type:  selector
    mode:  single
    types:
        - image
  title:
    label: Menu title
    type:  text
  subtitle:
    label: Sub title
    type:  text
  api:
    label: Link to the API
    type:  text
  videolink:
    label: Link to video
    type: text
    icon: file-video-o
  address:
    label: Fablab address
    type:  text
