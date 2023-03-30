<?php

namespace core;

class View
{
    public string $content = '';

    public function __construct(
        public $route,
        public $layout,
        public $view = '',
        public $meta = [],
    )
    {
        if (false !== $this->layout) {
            $this->layout = $this->layout ?: LAYOUT;
        }
    }

    public function render($data): void
    {
        if (is_array($data)) {
            extract($data);
        }
        $prefix = str_replace('\\', '/', $this->route['admin_prefix']);
        $view_file = APP . "/views/{$prefix}{$this->route['controller']}/{$this->view}.php";
        if (is_file($view_file)) {
            ob_start();
            require_once $view_file;
            $this->content = ob_get_clean();
        } else {
            throw new \Exception("View {$view_file} not found", 500);
        }

        if (false !== $this->layout) {
            $layout_file = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($layout_file)) {
                require_once $layout_file;
            } else {
                throw new \Exception("Layout {$layout_file} not found", 500);
            }
        }
    }

    public function getMeta(): string
    {
        $out = '<title>' . hchrs($this->meta['title']) . '</title>' . PHP_EOL;
        $out .= '<meta name="description" content=">' . hchrs($this->meta['description']) . '">' . PHP_EOL;
        $out .= '<meta name="keywords" content=">' . hchrs($this->meta['keywords']) . '">' . PHP_EOL;
        return $out;
    }


}