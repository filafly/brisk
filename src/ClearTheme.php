<?php

namespace Filafly\Themes\Clear;

use Filafly\Themes\Core\ThemeCore;
use Filament\Panel;

class ClearTheme extends ThemeCore
{
    public string $identifier = 'filafly-clear-theme';

    public function registerTheme(Panel $panel): void
    {
        // Theme configuration
    }

    public function fontConfiguration(Panel $panel): void
    {
        $panel->font('Kumbh Sans');
    }
}
