<?php


namespace app\model;

use \app\entity\articles;
use \app\model\Model;

class ModelArticle extends Model
{
    public function __construct()
    {
        $this->users="users";
        parent::__construct($this->users);
    }
}