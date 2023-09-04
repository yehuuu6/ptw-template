<?php

namespace Components;

/**
 * Component super class
 */
class Component
{
    /**
     * Renders component to the page
     */
    public function render(String $body)
    {
        echo $body;
    }
}
