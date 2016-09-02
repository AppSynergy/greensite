<?php

// This is purely for demonstration purposes.

add_filter( 'bloginfo', 'awesome_sauce', 10, 2 );

function awesome_sauce($text, $show)
{
  return str_replace("another WordPress", "an awesome", $text);
}
