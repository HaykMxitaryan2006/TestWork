<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\NotebookResource;
use App\Models\Notebook;
use Illuminate\Http\Request;

class GetNotebookController extends BaseController
{
    public function __invoke($notebook_id)
    {
        return new NotebookResource(Notebook::find($notebook_id));
    }
}
