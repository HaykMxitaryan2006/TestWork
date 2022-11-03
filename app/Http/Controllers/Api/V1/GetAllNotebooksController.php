<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\NotebookCollection;
use App\Models\Notebook;

class GetAllNotebooksController extends BaseController
{
    public function __invoke()
    {
        return new NotebookCollection(Notebook::paginate(10));
    }
}
