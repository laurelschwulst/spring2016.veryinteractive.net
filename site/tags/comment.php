<?php

kirbytext::$tags['coment'] = array(
  'html' => function($tag) {
    return '<span class="comment">' . $tag->attr('comment') . '</span>';
  }
);

?>