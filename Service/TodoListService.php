<?php
namespace Service {
    use Entity\TodoList;
    use Respository\TodoListRespository;
    interface TodoListService {
        function showTodoList(): void;
        function addTodoList(string $todo): void;
        function removeTodoList(int $number): void;
    }
    class TodoListServiceImpl implements todoListService {
        private TodoListRespository $todoListRespository;
        public function __construct(TodoListRespository $todoListRespository) {
            $this->todoListRespository = $todoListRespository;
        }
        function showTodoList(): void {
            echo "TODOLIST" . PHP_EOL;
            $todoListRespository->findAll();
            foreach ($todoList as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }
        function addTodoList(string $todo): void {
            $todoList = new TodoList($todo);
            $this->todoListRespository->save($todoList);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }
        function removeTodoList(int $number): void {
            if($this->todoListRespository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}
?>