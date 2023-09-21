<?php

namespace Components\Footer;

use Components\Component;

/**
 * Footer component
 */
class Footer extends Component
{
    public function __construct()
    {
        $body = <<<HTML
                <footer class="footer">
                    <span>Footer component</span>
                </footer>
        HTML;

        // Render the component on the page
        parent::render($body);
    }
}
