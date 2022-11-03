    

    У проекта есть 5 роутов

    Route::get('/notebooks/all','GetAllNotebooksController')->name('get_all_notebooks');
    Route::get('/notebooks/{notebook}','GetNotebookController')->name('get_notebook');
    Route::post('/notebooks/create','CreateNotebookController')->name('create_notebook');
    Route::patch('/notebooks/update/{notebook}','UpdateNotebookController')->name('update_notebook');
    Route::delete('/notebooks/delete/{notebook}','DeleteNotebookController')->name('delete_notebook');

    В проекте используются:
        JsonResources,
        Services которые соеденяются с контроллером
        с помощью BaseController-a,

    используется однометодные контроллеры.
    
    Описание функционала роутов.

    Роут /notebooks/all - Забирает из базы данных
        
        все записи. Используется пагинация по 10 записей.


    Роут /notebooks/{notebook} - Забирает из базы данных
        
        одну запись с помощью id.


    Роут /notebooks/create - Создает новый notebook
        
        в базе данных. Использует CreateNotebookRequest для валидации.

        и возвращает новую созданную запись.

    
    Роут /notebooks/update/{notebook} - Обноваляет данные 
        
        одного запися которое находим благодоря id.
        
        Используется UpdateNotebookRequest для валидации.

        Используется метод UpdateNotebook из NotebookService-a.

        Внутри сервиса проходит проверка - если не пришло ни одного
        значения для обнолвения notebook значит возвращаем ошибку.

        Если значения есть то обновляем и возвращаем уде обновленную запись.

        

    Роут /notebooks/delete/{notebook} - Удаляет определенную запись с бд
        
        благодоря id.

        Используется метод DeleteNotebook из NotebookService-a.

        Внутри сервиса проверяется - если по указанному id не нашли запись
        значит возвращаем ошибку.

        Если нашли удаляем запись и возвращаем ее то есть (true)
        

    
