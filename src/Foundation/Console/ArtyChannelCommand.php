<?php

namespace HandsomeBrown\Laraca\Foundation\Console;

use Illuminate\Foundation\Console\ChannelMakeCommand;

class ArtyChannelCommand extends ChannelMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'arty:channel';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return config('laraca.channel.namespace');
    }
}
