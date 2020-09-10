<?php

namespace App\Http\Controller\Contracts;

use App\Http\Controllers\Controller;

/**
 * Class ApiController
 * @package App\Http\Controller\Contracts
 */
abstract class ApiController extends Controller
{
    /**
     * @param null $type
     * @param null $title
     * @param null $detail
     * @param null $instance
     * @param null $status
     * @return array
     */
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
