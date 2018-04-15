<?php
add_theme_support('menus');

function Roman()
{
    $img = get_the_post_thumbnail_url();
    if (empty($img)){
        return '/img/post_thumb/thumb_1.jpg';
    }else {
        return $img;
    }
}