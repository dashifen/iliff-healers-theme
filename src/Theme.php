<?php

namespace Dashifen\IliffHealers;

use Dashifen\WPHandler\Handlers\HandlerException;
use Dashifen\WPHandler\Handlers\Themes\AbstractThemeHandler;

class Theme extends AbstractThemeHandler
{
    /**
     * initialize
     *
     * Uses addAction() and addFilter() to connect WordPress to the methods
     * of this object's child which are intended to be protected.
     *
     * @return void
     * @throws HandlerException
     */
    public function initialize(): void
    {
        if (!$this->isInitialized()) {
            $this->addAction('wp_enqueue_scripts', 'addAssets');
            $this->addAction('after_setup_theme', 'modifyThemeSupports');
        }
    }
    
    /**
     * addAssets
     *
     * Adds the CSS and JS to the DOM.
     *
     * @return void
     */
    protected function addAssets (): void
    {
        $this->enqueue('assets/iliff-healers.js');
        $this->enqueue('https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;700&display=swap');
        $this->enqueue('assets/iliff-healers.css');
    }
    
    /**
     * modifyThemeSupports
     *
     * Notifies WP core of things this theme supports.
     *
     * @return void
     */
    protected function modifyThemeSupports(): void
    {
        add_theme_support('html5');
        add_theme_support('title-tag');
        add_theme_support('responsive-embeds');
        add_theme_support('post-thumbnails');
    }
}
