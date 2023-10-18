<?php

class Controller {

    protected $vars;
    protected $path;
    protected $data = [];

    public function loadView(string $path, array|object $data = [])
    {
        $this->path = $path;
        $this->data = $data;

        add_action('basic-dashboard_main_content', function(){

            $data = $this->data;

            if(file_exists(plugin_path('/app/views/') . $this->path . ".php")) {
                include plugin_path('/app/views/') . $this->path . ".php";
            }
        });
    }
}