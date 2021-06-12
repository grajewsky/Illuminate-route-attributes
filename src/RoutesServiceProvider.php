<?php

declare(strict_types=1);

namespace GSSC\Routes;

use Illuminate\Support\Arr;
use Symfony\Component\Finder\Finder;
use Illuminate\Support\ServiceProvider;

abstract class RoutesServiceProvider extends ServiceProvider
{
    private function readFile(\SplFileInfo $file)
    {
        return $file;
    }

    private function readControllersFrom(string $namespace, string|array $paths)
    {
        $directories = Arr::wrap($paths);

        $files = (new Finder())->files()->name('*.php')->in($directories);

        collect($files)->each(fn (\SplFileInfo $file) => $this->readFile($file));
    }

    /**
     * Directories with controllers
     * @return array|string
     */
    abstract public function getControllersPaths(): array|string;


    public final function boot()
    {
        dd($this->getControllersPaths());
    }


}
