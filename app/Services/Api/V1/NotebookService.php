<?php

namespace App\Services\Api\V1;

use App\Models\Notebook;

class NotebookService
{
    /**
     *      Update Notebook method
     *
     * @param $data
     * @param $notebook_id
     * @return mixed
     */

    public function UpdateNotebook($data,$notebook_id)
    {

        // Если в request-е нету значений для обновления то возвращаем ошибку.
        // Если есть обновляем и возвращаем уже обновленные значения

        if(count($data) == 0) {
            return [
                "message" => "Specify one or more values to update.",
                 "errors"=> [
                    "No value found to update.",
                ]
            ];
        }else {
             Notebook::find($notebook_id)->update($data);

             return Notebook::find($notebook_id);
        }
    }

    /**
     *      Delete Notebook method
     *
     * @param $notebook_id
     * @return mixed
     */

    public function DeleteNotebook($notebook_id)
    {

        $notebook = Notebook::find($notebook_id);

        // Проверяем если notebook не найден то возвращаем ошибку.
        // Если найден удаляем notebook

        if($notebook != null) {
            return $notebook->delete();
        }else {
            return [
                "message" => "Notebook with id {$notebook_id} does not exist.",
                "errors"=> [
                    "Cant find notebook with id {$notebook_id}",
                ]
            ];
        }

    }

}
