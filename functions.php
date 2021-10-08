<?php

use Dashifen\IliffHealers\Theme;
use Dashifen\WPHandler\Handlers\HandlerException;

if (!class_exists('Dashifen\IliffHealers\Theme')) {
  require_once 'vendor/autoload.php';
}

(function () {
    try {
        $theme = new Theme();
        $theme->initialize();
    } catch (HandlerException $e) {
        Theme::catcher($e);
    }
})();
