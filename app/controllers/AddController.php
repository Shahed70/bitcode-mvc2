<?php 


    class AddController {

        public function add() {
            $title = isset($_POST['AddTodo']) ? $_POST['title'] : "title not found";
            return $title;
        }

    }