<?php

use HandsomeBrown\Laraca\Foundation\Console\MakeMailCommand;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

describe('make:mail', function () {
    it('should create Mail class at path from namespace', function (string $class) {
        $this->artisan(
            MakeMailCommand::class,
            ['name' => $class],
        );

        $configPath = namespaceToPath(config('laraca.mail.namespace'));
        $filePath = app_path("$configPath/$class.php");

        $result = Artisan::output();

        expect(File::exists(
            path: $filePath,
        ))->toBe(true, "File not created at expected path:\n".$filePath."\n".$result."\n\n");

    })->with('classes');

    it('should create a Mail class with the defined namespace', function (string $class) {
        $this->artisan(
            MakeMailCommand::class,
            ['name' => $class],
        );

        $configPath = namespaceToPath(config('laraca.mail.namespace'));
        $configNamespace = fullNamespaceStr(config('laraca.mail.namespace'));

        expect(File::get(
            path: app_path("$configPath/$class.php")))->toContain($configNamespace);

    })->with('classes');
});