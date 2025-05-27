<?php
defined('MOODLE_INTERNAL') || die();




function theme_wcagboost_get_main_scss_content($theme) {
    global $CFG;
    $pre = file_get_contents(__DIR__ . '/scss/pre.scss');
    $main = file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $post = '';  // You can create post.scss if needed
    return $pre . "\n" . $main . "\n" . $post;
}

function theme_wcagboost_page_init(moodle_page $page) {
    global $USER;

    // Získání role ve specifickém kontextu (např. kurz)
    $context = $page->context;

    // Zjistit, zda je uživatel student (role id = 5)
    if (user_has_role_assignment($USER->id, 5, $context->id)) {
        $page->add_body_class('role-student');
    } else {
        $page->add_body_class('role-other');
    }
}
