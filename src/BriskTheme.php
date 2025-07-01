<?php

namespace Filafly\Themes\Brisk;

use Filafly\Themes\Core\ThemeCore;
use Filament\Panel;

class BriskTheme extends ThemeCore
{
    public string $identifier = 'filafly-brisk-theme';

    public function registerTheme(Panel $panel): void
    {
        // Theme configuration
    }

    public function fontConfiguration(Panel $panel): void
    {
        $panel->font('Kumbh Sans');
    }
}
