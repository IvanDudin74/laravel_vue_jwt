<?php

namespace App\Http\Controllers\Fruit;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fruit\IndexResource;
use App\Models\Fruit;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = Fruit::all();
        return IndexResource::collection($data);
    }
}
