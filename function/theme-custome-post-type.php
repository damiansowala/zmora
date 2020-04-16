<?php
/* ========================================================================================================================
Custome Post Type
======================================================================================================================== */

function ctp()
{
    wpFn::cptCreate('artists', 'Artists', 'artists', 'dashicons-admin-users');
    wpFn::cptCreate('gallery', 'Gallery', 'gallery', 'dashicons-format-image');
}

add_action('init', 'ctp');