<?php

namespace App;

use App\Exceptions\ViewException;
use Stringable;

/**
 * Class for rendering views.
 */
class View implements Stringable
{
    /**
     * @var string The name of the view file.
     */
    protected $view;

    /**
     * @var array The parameters to pass to the view.
     */
    protected $params;

    /**
     * View constructor.
     *
     * @param string $view The name of the view file.
     * @param array $params The parameters to pass to the view.
     */
    public function __construct($view, $params = [])
    {
        $this->view = $view;
        $this->params = $params;
    }

    /**
     * Create a new View instance.
     *
     * @param string $view The name of the view file.
     * @param array $params The parameters to pass to the view.
     *
     * @return static A new View instance.
     */
    public static function make($view, $params = []): self
    {
        return new static($view, $params);
    }

    /**
     * Render the view and return its contents as a string.
     *
     * @return string The rendered view content.
     *
     * @throws ViewException If the view file is not found.
     */
    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewPath))
        {
            throw ViewException::viewNotFound();
        }

        $this->params['viewRender'] = $viewPath;
        // echo '<pre>';
        // print_r($params);
        // echo '</pre>';

        ob_start();

        extract($this->params); // Extract params for easy access in the view.
        // include $viewPath;
        include VIEW_PATH . '/index.php';

        return (string) ob_get_clean();
    }

    /**
     * Render the view and return its contents as a string.
     *
     * @return string The rendered view content.
     */
    public function __toString()
    {
        return $this->render();
    }
}
