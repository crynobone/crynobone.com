<?php namespace App\Http\Handlers;

use Orchestra\Foundation\Support\MenuHandler;

class BackToWebsite extends MenuHandler
{
    /**
     * Menu configuration.
     *
     * @var array
     */
    protected $menu = [
        'id'       => 'back-to-website',
        'position' => '^:home',
        'title'    => 'Back to website',
        'link'     => 'app::posts',
        'icon'     => null,
    ];

    /**
     * Check if menu should be included.
     *
     * @return bool
     */
    public function authorize()
    {
        return ($this->container['orchestra.app']->installed());
    }
}
