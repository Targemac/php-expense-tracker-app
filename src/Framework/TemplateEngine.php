<?php

declare(strict_types=1);

namespace Framework;

/**
 * Template Engine
 * 
 * @param
 * 
 * @method
 */

class TemplateEngine
{

    // $basePath stores the absolute path to our directory
    public function __construct(private string $basePath)
    {
    }

    public function render(string $template, array $data = [])
    {
        // this takes all keys in the array and creates variables with their respective values
        extract($data, EXTR_SKIP);

        // this tells php to store contents in an output buffer untill every line has fininshed loading
        ob_start();

        include $this->resolve($template);

        // this searches for an active buffer content, if found, it returns contents as a string
        $output = ob_get_contents();

        // stop output buffer and wipe buffer memory
        ob_end_clean();

        return $output;
    }

    public function resolve(string $path)
    {
        return "{$this->basePath}/{$path}";
    }
}
