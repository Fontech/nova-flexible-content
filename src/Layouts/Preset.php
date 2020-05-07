<?php

namespace Fontech\NovaFlexibleContent\Layouts;

use Fontech\NovaFlexibleContent\Flexible;

abstract class Preset
{
    /**
     * Execute the preset configuration
     *
     * @return void
     */
    abstract public function handle(Flexible $field);

}
