<?php

// provide outbrain permalinks
if (defined('OUTBRAIN_URL') &&
  !function_exists('get_outbrain_permalink')) {

  // define function
  function get_outbrain_permalink($post) {
    $url = parse_url(get_permalink($post));
    $scheme = $url['scheme'] = 'https'; // if though it is set to https later
    return sprintf("%s://". OUTBRAIN_URL ."%s", $scheme, wp_make_link_relative(get_permalink($post)));
  }
}

?>
