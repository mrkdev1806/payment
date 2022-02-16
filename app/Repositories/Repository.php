<?php
namespace App\Repositories;

abstract class Repository
{
    protected $model;

    abstract public function model();

    public function __construct()
    {
        $this->model = app($this->model());
    }

    public function all ($order)
    {
        return $this->model->orderBy('id' , $order)->get();
    }

    public function getBy ($col , $value , $order)
    {
        return $this->model->where($col , $value)->orderBy('id' , $order)->get();
    }

    public function find ($id)
    {
        return $this->model->find($id);
    }

    public function create (array $data)
    {
        return $this->model->create($data);
    }

    public function update ($model , array $data)
    {
        return $model->update($data);
    }

    public function delete ($model)
    {
        return $model->delete();
    }

    public function exists ($id)
    {
        return $this->model->where('id' , $id)->exists();
    }
}
