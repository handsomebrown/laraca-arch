<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

use function Pest\Laravel\artisan;

describe('make:seeder', function () {
    it('should create Seeder in config path', function (string $class) {
        Config::set('laraca.struct.database.path', 'test/database');

        artisan('make:seeder', ['name' => $class]);
        $output = Artisan::output();

        $class = getName($class);
        $seederPath = base_path("test/database/seeders/{$class}.php");

        expect($seederPath)
            ->toBeFile("File not created at expected path:\n$seederPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($seederPath))->toContain(
            'namespace Test\Database\Seeders;',
            "class $class",
        );
    })->with('classes');

    it('should create Seeder in config path with domain', function (string $class, string $domain) {
        Config::set('laraca.struct.database.path', 'test/database');

        artisan('make:seeder', ['name' => $class, '--domain' => $domain]);
        $output = Artisan::output();

        $class = getName($class);
        $domain = getName($domain);
        $seederPath = app_path("Domains/$domain/test/database/seeders/{$class}.php");

        expect($seederPath)
            ->toBeFile("File not created at expected path:\n$seederPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($seederPath))->toContain(
            "namespace App\Domains\\$domain\Test\Database\Seeders;",
            "class $class",
        );
    })->with('classes', 'domains');

    it('should create Seeder in config path with service', function (string $class, string $service) {
        Config::set('laraca.struct.database.path', 'test/database');

        artisan('make:seeder', ['name' => $class, '--service' => $service]);
        $output = Artisan::output();

        $class = getName($class);
        $service = getName($service);
        $seederPath = app_path("Services/$service/test/database/seeders/{$class}.php");

        expect($seederPath)
            ->toBeFile("File not created at expected path:\n$seederPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($seederPath))->toContain(
            "namespace App\Services\\$service\Test\Database\Seeders;",
            "class $class",
        );
    })->with('classes', 'domains');

    it('should create Seeder in config path with domain service', function (string $class, string $domain, string $service) {
        Config::set('laraca.struct.database.path', 'test/database');

        artisan('make:seeder', ['name' => $class, '--domain' => $domain, '--service' => $service]);
        $output = Artisan::output();

        $class = getName($class);
        $service = getName($service);
        $domain = getName($domain);

        $seederPath = app_path("Domains/$domain/Services/$service/test/database/seeders/{$class}.php");

        expect($seederPath)
            ->toBeFile("File not created at expected path:\n$seederPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($seederPath))->toContain(
            "namespace App\Domains\\$domain\Services\\$service\Test\Database\Seeders;",
            "class $class",
        );
    })->with('classes', 'domains', 'domains');
});
