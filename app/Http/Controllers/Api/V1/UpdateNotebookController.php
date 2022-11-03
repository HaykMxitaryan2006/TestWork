<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\UpdateNotebookRequest;
use App\Http\Resources\Api\V1\NotebookResource;
use App\Models\Notebook;
use Illuminate\Http\Request;

class UpdateNotebookController extends BaseController
{
    public function __invoke(UpdateNotebookRequest $request,$notebook_id)
    {
        $data = $request->validated();

        return $this->service->UpdateNotebook($data,$notebook_id);
    }
}
