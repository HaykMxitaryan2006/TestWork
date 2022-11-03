<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Notebook;
use Illuminate\Http\Request;

class DeleteNotebookController extends BaseController
{
    public function __invoke($notebook_id)
    {
        return $this->service->DeleteNotebook($notebook_id);
    }
}
