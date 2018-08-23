<?php

namespace PeterBrinck\NovaLaravelNews;

use Laravel\Nova\Card;

class NovaLaravelNews extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-laravel-news';
    }
}
