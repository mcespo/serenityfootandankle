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
            'menu_class' => 'hidden space-x-10 md:flex',
            'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
            'depth' => 4,
            'fallback_cb' => 'tailwind_navwalker::fallback',
            'walker' => new \Tailwind_Navwalker()
        );
        return $args;
    }
}
