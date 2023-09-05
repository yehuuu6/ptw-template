<?php

namespace Components\Navbar;

if (!defined('FILE_ACCESS')) {
    header("HTTP/1.1 403 Forbidden");
    include($_SERVER['DOCUMENT_ROOT'] . '/errors/403.html');
    exit;
}

require_once("{$_SERVER['DOCUMENT_ROOT']}/config/constants.php");

use Components\Component;

/**
 * Navbar component
 * @props title, description, keywords, author, favicon
 * @warning Non set props will be set to their default values in constants.php
 */
class Navbar extends Component
{
    public function __construct(array $props = [])
    {
        // Check if metadata props are valid
        $this->checkMetadata($props);

        // Set metadata props
        $metadata = $this->setMetadata($props);
        list($title, $desc, $keywords, $author, $favi) = $metadata;

        $body = <<<HTML
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="{$desc}">
                <meta name="keywords" content="{$keywords}">
                <meta name="author" content="{$author}">
                <link rel="shortcut icon" href="{$favi}" type="image/x-icon">
                <link rel="stylesheet" href="/dist/bundle.css">
                <title>{$title}</title>
            </head>
            <body>
            <main class="App">
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

    /**
     * Checks if metadata props are valid.
     * @throws Exception If one or more metadata props are invalid or has more than 5 props.
     */
    private function checkMetadata(array $props = [])
    {
        $allowed = [
            "title",
            "description",
            "keywords",
            "author",
            "favicon"
        ];

        if (count($props) > 5) {
            throw new \Exception("Navbar component has too many props.");
        }

        if ($props) {
            foreach (array_keys($props) as $key) {
                if (!in_array($key, $allowed)) {
                    throw new \Exception("Navbar component has an unknown prop.");
                }
            }
        }
    }

    /**
     * Sets page metadata based on props given to the component.
     */
    private function setMetadata(array $props = [])
    {
        $PAGE_TITLE = $props["title"] ?? DEFAULT_PAGE_TITLE;
        $PAGE_DESCRIPTION = $props["description"] ?? DEFAULT_PAGE_DESCRIPTION;
        $PAGE_KEYWORDS = $props["keywords"] ?? DEFAULT_PAGE_KEYWORDS;
        $PAGE_AUTHOR = $props["author"] ?? DEFAULT_PAGE_AUTHOR;
        $PAGE_FAVICON = $props["favicon"] ?? DEFAULT_PAGE_FAVICON;

        return [$PAGE_TITLE, $PAGE_DESCRIPTION, $PAGE_KEYWORDS, $PAGE_AUTHOR, $PAGE_FAVICON];
    }
}
