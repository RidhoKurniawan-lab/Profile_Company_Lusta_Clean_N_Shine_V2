<?php

class Controller
{
    protected function view(string $view, array $data = [], string $layout = 'user')
    {
        extract($data);

        ob_start();

        require VIEWS_PATH . '/' . $view . '.php';

        $content = ob_get_clean();

        require VIEWS_PATH . '/layout/' . $layout . '.php';
    }

    protected function json(array $data, int $status = 200){
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
