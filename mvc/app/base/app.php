<?php

class App
{
    protected $controller = "member";
    protected $method = "index";
    protected $params;

    public function __construct()
    {
        $url = $this->parseURL();
        unset($url[0]);
        unset($url[1]);

        if(!empty($url) && file_exists(plugin_path('/app/controllers/') . strtolower($url[2]) . ".php"))
        {
            $this->controller = strtolower($url[2]);
            // Remove what we are not using from url
            unset($url[2]);
        }

        // Load and set the controller
        require plugin_path('/app/controllers/') . $this->controller . ".php";
        $this->controller = new $this->controller;

        // Do we have a method?
        if(isset($url[3]))
        {
            $url[3] = strtolower($url[3]);
            if(method_exists($this->controller, $url[3]))
            {
                $this->method = $url[3];
                unset($url[3]);
            } else {
                add_action('basic-dashboard_main_content', function(){
                   include plugin_path('app/views/error/err.php');
                   exit();
                });
            }
        }

        $this->params = count($url) > 0 ? $url : ["member"];
        call_user_func_array([$this->controller, $this->method], $this->params);
        //show(array_values($url));
    }

    private function parseURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "member";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}