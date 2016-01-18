<?php if(!defined('KIRBY')) exit ?>

title: Kaartform
pages: true
files: true
fields:
  heroimage:
    label: Hero image
    type:  selector
    mode:  single
    types:
        - image
  icon:
    label: Icon
    type:  selector
    mode:  single
    types:
        - image
  title:
    label: Title
    type:  text
  videolink:
    label: Link to video
    type: text
    icon: file-video-o
  subtitle:
    label: Subtitle
    type:  text
  intro:
    label: Intro
    type:  textarea
    validate:
      min: 4
      max: 140
  text:
    label: Text
    type:  textarea
