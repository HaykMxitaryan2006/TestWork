<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\Api\V1\NotebookService;

class BaseController
{
    public $service;

    public function __construct(NotebookService $service)
    {
        $this->service = $service;
    }
}
