<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

use function Pest\Laravel\artisan;

describe('make:job', function () {
    it('should create Job and test in config path', function (string $class) {
        Config::set('laraca.struct.job.path', 'Test/Jobs');

        artisan('make:job', ['name' => $class, '--test' => true]);
        $output = Artisan::output();

        $class = getName($class);
        $jobPath = app_path("Test/Jobs/$class.php");

        expect($jobPath)
            ->toBeFile("File not created at expected path:\n$jobPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobPath))->toContain(
            'namespace App\Test\Jobs;',
            "class $class",
        );

        $classTest = getName($class)->finish('Test');
        $jobTestPath = base_path("tests/Feature/$classTest.php");

        expect($jobTestPath)
            ->toBeFile("File not created at expected path:\n$jobTestPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobTestPath))->toContain(
            'namespace Tests\Feature;',
            "class $classTest",
        );
    })->with('classes');

    it('should create Job and test in config path with domain', function (string $class, string $domain) {
        Config::set('laraca.struct.domain.path', 'Test/Domains');

        artisan('make:job', ['name' => $class, '--domain' => $domain, '--test' => true]);
        $output = Artisan::output();

        $class = getName($class);
        $domain = getName($domain);
        $jobPath = app_path("Test/Domains/$domain/Jobs/$class.php");

        expect($jobPath)
            ->toBeFile("File not created at expected path:\n$jobPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobPath))->toContain(
            "namespace App\Test\Domains\\$domain\Jobs;",
            "class $class",
        );

        $classTest = getName($class)->finish('Test');

        $jobTestPath = app_path("Test/Domains/$domain/tests/Feature/$classTest.php");

        expect($jobTestPath)
            ->toBeFile("File not created at expected path:\n$jobTestPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobTestPath))->toContain(
            "namespace App\Test\Domains\\$domain\Tests\Feature;",
            "class $classTest",
        );
    })->with('classes', 'domains');

    it('should create Job and test in config path with service', function (string $class, string $service) {
        Config::set('laraca.struct.microservice.path', 'Test/Services');

        artisan('make:job', ['name' => $class, '--service' => $service, '--test' => true]);
        $output = Artisan::output();

        $class = getName($class);
        $service = getName($service);
        $jobPath = app_path("Test/Services/$service/Jobs/$class.php");

        expect($jobPath)
            ->toBeFile("File not created at expected path:\n$jobPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobPath))->toContain(
            "namespace App\Test\Services\\$service\Jobs;",
            "class $class",
        );

        $classTest = getName($class)->finish('Test');

        $jobTestPath = app_path("Test/Services/$service/tests/Feature/$classTest.php");

        expect($jobTestPath)
            ->toBeFile("File not created at expected path:\n$jobTestPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobTestPath))->toContain(
            "namespace App\Test\Services\\$service\Tests\Feature;",
            "class $classTest",
        );
    })->with('classes', 'domains');

    it('should create Job and test in config path with domain service', function (string $class, string $domain, string $service) {
        Config::set('laraca.struct.domain.path', 'Test/Domains');

        artisan('make:job', ['name' => $class, '--domain' => $domain, '--service' => $service, '--test' => true]);
        $output = Artisan::output();

        $class = getName($class);
        $service = getName($service);
        $domain = getName($domain);

        $jobPath = app_path("Test/Domains/$domain/Services/$service/Jobs/$class.php");

        expect($jobPath)
            ->toBeFile("File not created at expected path:\n$jobPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobPath))->toContain(
            "namespace App\Test\Domains\\$domain\Services\\$service\Jobs;",
            "class $class",
        );

        $classTest = getName($class)->finish('Test');
        $jobTestPath = app_path("Test/Domains/$domain/Services/$service/tests/Feature/$classTest.php");

        expect($jobTestPath)
            ->toBeFile("File not created at expected path:\n$jobTestPath\n\nOutput results:\n$output\n=====\n");

        expect(File::get($jobTestPath))->toContain(
            "namespace App\Test\Domains\\$domain\Services\\$service\Tests\Feature;",
            "class $classTest",
        );
    })->with('classes', 'domains', 'domains');
});
