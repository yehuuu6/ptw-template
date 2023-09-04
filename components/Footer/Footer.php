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
            </main>
            <script src="/dist/bundle.js"></script>
            </body>
            </html>
        HTML;

        // Render the component on the page
        parent::render($body);
    }
}
