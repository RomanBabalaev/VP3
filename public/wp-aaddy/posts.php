<?php
require '../wp-load.php';

$pasts = get_posts([
    'post_type' => 'post'

]);
echo json_encode($posts);