<?php

namespace HandsomeBrown\Laraca\Foundation\Console\Artisan;

use Illuminate\Foundation\Console\PolicyMakeCommand;

class MakePolicyCommand extends PolicyMakeCommand
{
    /**
     * name
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:policy';

    /**
     * getDefaultNamespace
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\\'.config('laraca.policy.namespace');
    }
}