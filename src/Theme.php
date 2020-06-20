<?php

namespace Dashifen\IliffHealers;

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
     */
    public function initialize(): void
    {
        if (!$this->isInitialized()) {
            $this->addAction('wp_enqueue_scripts', 'addAssets');
        }
    }
    
    protected function addAssets (): void
    {
        $this->enqueue('assets/iliff-healers.js');
        $this->enqueue('https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;700&display=swap');
        $this->enqueue('assets/iliff-healers.css');
    }
}
