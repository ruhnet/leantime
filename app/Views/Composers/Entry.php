<?php

namespace Leantime\Views\Composers;

use Leantime\Core\Composer;
use Leantime\Core\Theme;

/**
 *
 */
class Entry extends Composer
{
    public static array $views = [
        'global::layouts.entry',
    ];

    private Theme $themeCore;

    public function init(Theme $themeCore): void {
        $this->themeCore = $themeCore;
    }

    /**
     * @return array
     */
    public function with(): array
    {
        $this->themeCore->getActive();
        $logoUrl = $this->themeCore->getLogoUrl();

        return [
            'logoPath' =>  $logoUrl ? $logoUrl : BASE_URL."/dist/images/logo.svg",
        ];
    }
}
