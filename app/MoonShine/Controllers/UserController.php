<?php

namespace App\MoonShine\Controllers;

use App\MoonShine\Resources\UserResource;

use Leeto\MoonShine\Controllers\BaseMoonShineController;

class UserController extends BaseMoonShineController
{
    public function __construct()
    {
        $this->resource = new UserResource();
    }
}
