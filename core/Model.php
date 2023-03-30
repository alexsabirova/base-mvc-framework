<?php

namespace core;

abstract class Model
{
    protected $db = null;
    public array $attributes = [];
    public array $errors = [];
    public array $rules = [];
    public array $labels = [];

    public function __construct()
    {
        $this->db = Db::getInstance();
    }
}