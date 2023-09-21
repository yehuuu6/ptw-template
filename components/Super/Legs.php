<?php

namespace Components\Super;

use Components\Component;

/**
 * Bottom of the page component
 */
class Legs extends Component
{
    public function __construct()
    {
        $body = <<<HTML
                </main>
                <script src="/dist/bundle.js"></script>
            </body>
            </html>
        HTML;

        // Render the component on the page
        parent::render($body);
    }
}
