<?php

include "./app/model/Todo.php";

class IndexController
{

    public function getTodo()
    {
        $todoModel = new Todo();
        $todos = $todoModel->getAllTodo();
        include "./app/views/index.view.php";
    }
}
