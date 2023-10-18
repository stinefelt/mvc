<?php

class Member extends Controller {

    public function index()
    {
        $this->loadView('index');
    }

    public function edit(int|string $id = '')
    {
        if($id === '' || !is_numeric($id))
        {
            message_fail('We cannot seem to find the id your looking for!');
            $this->loadView('edit', ['id' => 'NULL']);
            return;
        }

        $id = esc($id);

        $data['id'] = $id;
        message_success('Well done we have located your id.');
        $this->loadView('edit', $data);
    }

    public function update(int|string $id = '')
    {
        if($id === '' || !is_numeric($id))
        {
            message_fail('We cannot seem to find the id your looking for!');
            $this->loadView('edit', ['id' => 'NULL']);
            return;
        }

        $id = esc($id);

        $data['id'] = $id;
        message_success('Well done we have located your id.');
        $this->loadView('update', $data);
    }

    public function delete(int|string $id = '')
    {
        if($id === '' || !is_numeric($id))
        {
            message_fail('We cannot seem to find the id your looking for!');
            $this->loadView('edit', ['id' => 'NULL']);
            return;
        }

        $id = esc($id);

        $data['id'] = $id;
        $data['msg'] = 'We have deleted the post master!';
        message_success('Well done we have located your id.');
        $this->loadView('delete', $data);
    }
}