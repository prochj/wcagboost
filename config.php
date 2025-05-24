<?php
$THEME->name = 'wcagboost';

$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->scss = function($theme) {
    return theme_wcagboost_get_main_scss_content($theme);
};
$THEME->plugins_exclude_sheets = ['boost'];
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_boost_css_postprocess';
