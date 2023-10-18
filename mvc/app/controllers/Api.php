<?php

class Api extends Controller
{
    protected $request;
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \Mvc\TestModel;
        $this->request = new \Core\Request;
    }

    public function index()
    {
        $this->loadView('/api/index');
    }

    public function users()
    {
        echo json_encode($this->userModel->getAll());

        // Should remove, only here for testing.
        $html = '<a href="/dashboard/mvc/api"><button class="btn btn-success">Go Back</button></a>';
        echo $html;
        // Testing above

        exit();
    }

    public function user(int|string $id)
    {
        $id = esc($id);
        echo json_encode($this->userModel->first(['id' => $id]));

        // Should remove, only here for testing.
        $html = '<a href="/dashboard/mvc/api"><button class="btn btn-success">Go Back</button></a>';
        echo $html;
        // Testing above

        exit();
    }

    public function adduser()
    {
        $postdata = $this->request->post();

        if(isset($postdata))
        {
            $this->userModel->insert($postdata);

            echo json_encode(['result' => 1, 'message' => 'User has been added.']);

            // Should remove, only here for testing.
            $html = '<a href="/dashboard/mvc/api"><button class="btn btn-success">Go Back</button></a>';
            echo $html;
            // Testing above

            exit();
        }
    }
}