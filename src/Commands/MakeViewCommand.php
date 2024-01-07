<?php

namespace HandsomeBrown\Laraca\Commands;

use HandsomeBrown\Laraca\Commands\Traits\CreatesView;
use HandsomeBrown\Laraca\Commands\Traits\Directable;
use HandsomeBrown\Laraca\Commands\Traits\Shared;
use Illuminate\Foundation\Console\ViewMakeCommand;
use Illuminate\Support\Str;

class MakeViewCommand extends ViewMakeCommand
{
    use CreatesView, Directable, Shared;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:view';

    /**
     * Get the destination test case path.
     *
     * @return string
     */
    protected function getTestPath()
    {
        $testBasePath = Str::of($this->testClassFullyQualifiedName())
            ->replace('\\', '/')
            ->replaceFirst('Tests/Feature', 'tests/Feature')
            ->replaceFirst('App/', 'app/')
            ->append('Test.php')
            ->value();
        // echo base_path($testBasePath)."\n\n";
        // echo $this->getConfigPathWithOptions('test')."\n\n";
        // echo $this->getConfigPathWithOptions('test')."/$testBasePath"."\n\n";

        return base_path($testBasePath);
    }

    /**
     * Create the matching test case if requested.
     *
     * @param  string  $path
     */
    // protected function handleTestCreation($path): bool
    // {
    //     $path = $this->formatName($this->getNameInput());

    //     echo "$path\n\n";

    //     return $this->makeTest($path);
    // }
    /**
     * Get the class fully qualified name for the test.
     *
     * @return string
     */
    protected function testClassFullyQualifiedName()
    {
        $name = Str::of(Str::lower($this->getNameInput()))->replace('.'.$this->option('extension'), '');

        $namespacedName = Str::of(
            Str::of($name)
                ->replace('/', ' ')
                ->explode(' ')
                ->map(fn ($part) => Str::of($part)->ucfirst())
                ->implode('\\')
        )
            ->replace(['-', '_'], ' ')
            ->explode(' ')
            ->map(fn ($part) => Str::of($part)->ucfirst())
            ->implode('');

        return $this->getConfigNamespaceWithOptions('test', true).'\\Feature\\View\\'.$namespacedName;
    }
}
