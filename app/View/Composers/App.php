<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{

    public $page;
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
            'acf' => $this->acf(),
            'options' => $this->options(),
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

    public function acf()
    {
        global $post;

        $this->page = (!is_home()) ? $post : get_page(get_option('page_for_posts'));

        return get_fields($this->page);
    }

    public function options()
    {
        return get_fields('options');
    }
}
