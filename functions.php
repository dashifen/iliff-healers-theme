<?php
/**
 * @noinspection PhpStatementHasEmptyBodyInspection
 * @noinspection PhpIncludeInspection
 */

use Dashifen\IliffHealers\Theme;
use Dashifen\WPHandler\Handlers\HandlerException;

if (file_exists($autoloader = dirname(ABSPATH) . '/deps/vendor/autoload.php'));
elseif ($autoloader = file_exists(dirname(ABSPATH) . '/vendor/autoload.php'));
elseif ($autoloader = file_exists(ABSPATH . 'vendor/autoload.php'));
else $autoloader = 'vendor/autoload.php';
require_once $autoloader;

(function () {
    try {
        $theme = new Theme();
        $theme->initialize();
    } catch (HandlerException $e) {
        Theme::catcher($e);
    }
})();
