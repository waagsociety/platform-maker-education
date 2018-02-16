/*
we use block as a content type without page representation, however kirby wants every blueprint thing to be a page with an url.
when a block url is routed, just redirect to home
*/
<?php go('/') ?>
