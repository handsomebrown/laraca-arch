<?php

namespace HandsomeBrown\Laraca\Foundation\Console;

use HandsomeBrown\Laraca\Console\Concerns\Generates;
use Illuminate\Foundation\Console\ComponentMakeCommand;

class MakeComponentCommand extends ComponentMakeCommand
{
    use Generates;

    /**
     * name
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:component';

    /**
     * getDefaultNamespace
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\\'.config('laraca.component.namespace');
    }
}