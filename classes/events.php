<?php

namespace theme_fakesmarts;

class events
{
    public static function redirect_user_to_home_page() {
        global $CFG;
        $config = get_config('theme_fakesmarts');
        if ($config->redirect_url) {
            redirect($CFG->wwwroot . $config->redirect_url);
        }
    }
}