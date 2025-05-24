<?php
defined('MOODLE_INTERNAL') || die();

function theme_wcagboost_get_main_scss_content($theme) {
    global $CFG;
    $pre = file_get_contents(__DIR__ . '/scss/pre.scss');
    $main = file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $post = '';  // You can create post.scss if needed
    return $pre . "\n" . $main . "\n" . $post;
}
