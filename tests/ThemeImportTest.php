<?php

use PHPUnit\Framework\TestCase;

class ThemeImportTest extends TestCase
{
    public function test_first_import_is_filament_base_theme(): void
    {
        $themeCssPath = __DIR__ . '/../resources/css/theme.css';
        
        $this->assertFileExists($themeCssPath, 'Theme CSS file must exist');
        
        $content = file_get_contents($themeCssPath);
        $this->assertNotFalse($content, 'Theme CSS file must be readable');
        
        $lines = explode("\n", $content);
        $firstLine = trim($lines[0]);
        
        $expectedImport = "@import '../../../../filament/filament/resources/css/theme.css';";
        
        $this->assertEquals(
            $expectedImport,
            $firstLine,
            'First import must be the filament base theme with exact path'
        );
    }
}