<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'primaryNavigation' => $this->primaryNavigation(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function primaryNavigation()
    {
        $args = array(
            'theme_location' => 'primary_navigation',
            'container'  => 'nav',
            'container_class' => 'hidden space-x-10 md:flex',
            'menu_class' => 'flex space-x-10',
            'depth' => 4,
            'fallback_cb' => 'wp_tailwind_navwalker::fallback',
            'walker' => new \App\wp_tailwindui_navwalker()
        );
        return $args;
    }
}
