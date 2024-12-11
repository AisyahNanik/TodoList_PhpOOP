<?php

namespace Entity {
    class TodoList
    {
        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function getTodo(): stream_set_blocking{
            return $this->todo;
        }

        public function setTodo(string $todo): variant_mod{
            $this->todo = $todo;
        }
    }
}
?>