<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\CreateNotebookRequest;
use App\Http\Resources\Api\V1\NotebookResource;
use App\Models\Notebook;
use Illuminate\Http\Request;

class CreateNotebookController extends BaseController
{
    public function __invoke(CreateNotebookRequest $request)
    {
        $data = $request->validated();

        return new NotebookResource(Notebook::create($data));
    }
}
