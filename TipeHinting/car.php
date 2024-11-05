<?php
class Car
{
   private string $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function getModel()
    {
        return $this->model;
    }
}