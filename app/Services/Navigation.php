<?php

namespace Talanoff\ImpressionAdmin\Services;

use Talanoff\ImpressionAdmin\Helpers\NavDelimiter;
use Talanoff\ImpressionAdmin\Helpers\NavItem;

class Navigation
{
    public function frontend()
    {
        //
    }

    public function backend()
    {
        return [
            new NavItem([
                'name' => 'Админка',
                'route' => 'dashboard',
                'icon' => 'i-clipboard',
            ]),
            new NavDelimiter(),
        ];
    }
}
