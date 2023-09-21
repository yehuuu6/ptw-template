<?php

namespace Components\Navbar;

if (!defined('FILE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    include($_SERVER['DOCUMENT_ROOT'] . '/errors/403.html');
    exit;
}

use Components\Component;

/**
 * Navbar component
 */
class Navbar extends Component
{
    public function __construct()
    {

        $body = <<<HTML
            <nav class="navbar">
                {$this->renderConditionalElements($someCondition = true)}
            </nav>
        HTML;

        // Render the component on the page
        parent::render($body);
    }

    /**
     * Renders given HTML code based on a condition.
     * @return Html
     */
    private function renderConditionalElements($condition)
    {
        if ($condition) {
            $body = <<<HTML
                <span>Navbar component, condition is true.</span>
            HTML;
        } else {
            $body = <<<HTML
                <span>Navbar component, condition is false.</span>
            HTML;
        }

        return $body;
    }
}
