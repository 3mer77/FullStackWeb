<?php

class Controller{

    public function model($model) {
        if(file_exists(`APP/Models/'. $model .'.php`)) {
            require_once `APP/Models/'. $model .'.php`;
            return new $model;
        } else {
            return null;
        }
    }
}