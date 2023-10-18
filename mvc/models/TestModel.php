<?php
namespace Mvc;
use \Model\Model;

defined('ROOT') or die("Direct script access not allowed!");

// Class TestModel
class TestModel extends Model
{
    protected $table = 'test';
    public $primary_key = 'id';

    protected $allowedColumns =
    [
        'f_name',
        'l_name'
    ];

    protected $allowedUpdateColumns =
    [
        'f_name',
        'l_name'
    ];

    public function validate_insert(array $data):bool
    {
        if(empty($data['f_name']))
        {
            $this->errors['f_name'] = 'First Name is required!';
        }

        if(empty($data['l_name']))
        {
            $this->errors['l_name'] = 'Last Name is required!';
        }

        return empty($this->errors);
    }

    public function validate_update(array $data):bool
    {
        if(empty($data['f_name']))
        {
            $this->errors['f_name'] = 'First Name is required!';
        }

        if(empty($data['l_name']))
        {
            $this->errors['l_name'] = 'Last Name is required!';
        }

        return empty($this->errors);
    }
}