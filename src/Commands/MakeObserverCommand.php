<?php

namespace HandsomeBrown\Laraca\Commands;

use HandsomeBrown\Laraca\Commands\Traits\Directable;
use HandsomeBrown\Laraca\Commands\Traits\SharedMethods;
use HandsomeBrown\Laraca\Commands\Traits\UsesLaravelGenerator;
use Illuminate\Foundation\Console\ObserverMakeCommand;

class MakeObserverCommand extends ObserverMakeCommand
{
    use Directable, SharedMethods, UsesLaravelGenerator;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:observer';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $this->getFullNamespace('observer');
    }
}
