<?php

namespace HandsomeBrown\Laraca\Foundation\Console;

use Illuminate\Database\Console\Factories\FactoryMakeCommand;
use Illuminate\Support\Str;

class MakeFactoryCommand extends FactoryMakeCommand
{
    /**
     * name
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:factory';

    /**
     * getPath
     * Get the destination class path.
     *
     * @param  string  $name
     */
    protected function getPath($name): string
    {
        $name = (string) Str::of($name)->replaceFirst($this->rootNamespace(), '')->finish('Factory');

        return $this->laravel->databasePath().DIRECTORY_SEPARATOR.config('laraca.factory.path')."/$name.php";
    }

    /**
     * getNamespace
     * Get the full namespace for a given class, without the class name.
     *
     * @param  string  $name
     */
    protected function getNamespace($name): string
    {
        return $this->rootNamespace().'\\'.config('laraca.factory.namespace');
    }
}
