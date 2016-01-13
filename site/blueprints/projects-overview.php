<?php if(!defined('KIRBY')) exit ?>

title: projects-overview
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
  subtitle:
    label: Subtitle
    type:  text
  intro:
    label: Intro
    type:  textarea
    validate:
      min: 4
      max: 140
  layout:
    label: layout
    type: radio
    options:
      one-col: One column
      two-col: two column
      three-col: Three column
      three-col-two: Three column 2x
      four-col: Four column
      four-col-three: Four column 3x
  elementheight:
    label: Height of element on the homepage
    type: radio
    options:
      full-height: Full height
      half-height: Half height
      

  border:
    label: Show border
    type: checkboxes
    options:
      borderTop: Top
      borderRight: Right
      borderBottom: Bottom
      borderLeft: Left
