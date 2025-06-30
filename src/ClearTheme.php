<?php

namespace Filafly\Themes\Clear;

use Filafly\Icons\Phosphor\PhosphorIcons;
use Filament\Actions\Action;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Tables\Table;

class ClearTheme implements Plugin
{
    public bool $withSuggestedFont = true;

    public bool $withSuggestedIcons = true;

    public function getId(): string
    {
        return 'clear-theme';
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function register(Panel $panel): void
    {
        if ($this->withSuggestedIcons) {
            $panel->plugin(
                PhosphorIcons::make()
                    ->duotone()
                    ->overrideStyleForIcon([
                        'phosphor-caret-up',
                        'phosphor-caret-down',
                        'phosphor-caret-left',
                        'phosphor-caret-right',
                        'phosphor-x',
                    ], 'regular')
            );
        }

        if ($this->withSuggestedFont) {
            $panel->font('Figtree');
        }

    }

    public function boot(Panel $panel): void
    {
        static::configure();
    }

    public static function configure(): void
    {
        Table::configureUsing(fn (Table $table) => $table->striped());
        Action::macro('detached', fn () => $this->extraModalWindowAttributes(['class' => 'detached-slide-over']));
    }

    public function withoutSuggestedFont(): static
    {
        $this->withSuggestedFont = false;

        return $this;
    }

    public function withoutSuggestedIcons(): static
    {
        $this->withSuggestedIcons = false;

        return $this;
    }
}
