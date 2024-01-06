<?php

namespace HandsomeBrown\Laraca\Commands;

use HandsomeBrown\Laraca\Commands\Traits\Directable;
use HandsomeBrown\Laraca\Commands\Traits\SharedMethods;
use HandsomeBrown\Laraca\Commands\Traits\UsesLaravelGenerator;
use Illuminate\Database\Console\Factories\FactoryMakeCommand;
use Illuminate\Support\Str;

class MakeFactoryCommand extends FactoryMakeCommand
{
    use Directable, SharedMethods, UsesLaravelGenerator;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:factory';

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     */
    protected function getPath($name): string
    {
        $name = Str::of($name)->replaceFirst($this->rootNamespace(), '')->finish('Factory');

        return self::getFullPath('factory')."/$name.php";
    }

    /**
     * Get the full namespace for a given class, without the class name.
     *
     * @param  string  $name
     */
    protected function getNamespace($name)
    {
        return $this->getFullNamespace('factory');
    }
}
