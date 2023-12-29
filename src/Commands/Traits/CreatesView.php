<?php

namespace HandsomeBrown\Laraca\Commands\Traits;

trait CreatesView
{
    /**
     * viewPath
     * Get the first view directory path from the application configuration.
     *
     * @param  string  $path
     * @return string
     */
    protected function viewPath($path = '')
    {
        $views = parent::viewPath($path);

        try {
            $laracaViewsPath = $this->assembleFullPath('view');
            $views = $laracaViewsPath.'/'.$path;
        } catch (\Throwable $th) {
            $this->components->info('Using config.view config path.');
        }

        return $views;
    }
}