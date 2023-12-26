<?php

use HandsomeBrown\Laraca\Foundation\Console\MakeListenerCommand;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

describe('make:listener', function () {
    it('should create Listener class with namespace at path created from configured namespace', function (string $class) {
        $this->artisan(MakeListenerCommand::class,
            ['name' => $class]);

        $configPath = assemblePath('listener');
        $filePath = "$configPath/$class.php";

        $result = Artisan::output();

        expect(File::exists($filePath))
            ->toBe(true, "File not created at expected path:\n".$filePath."\nCommand result:\n".$result."\n\n");

        $configNamespace = fullNamespaceStr(assembleNamespace('listener'));

        expect(File::get($filePath))
            ->toContain($configNamespace);

    })->with('classes');
});
