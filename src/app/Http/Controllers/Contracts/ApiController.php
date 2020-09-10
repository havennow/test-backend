<?php

namespace App\Http\Controller\Contracts;

use App\Http\Controllers\Controller;

abstract class ApiController extends Controller
{
    public function setError($type = null, $title = null, $detail = null, $instance = null, $status = null)
    {
        return [
            'type' => $type,
            'title' => $title,
            'detail' => $detail,
            'instance' => $instance,
            'status' => $status
        ];
    }
}
