<?php

require_once __DIR__ . '/Entity/TodoList.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Respository/TodoListRespository.php';
require_once __DIR__ . '/Service/TodoListService.php';
require_once __DIR__ . '/View/TodoListView.php';

use Respository\TodoListRespositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi Todolist" . PHP_EOL;

$todoListRespository = new TodoListRespositoryImpl();
$todolistService = new TodoListServiceImpl($todoListRespository);
$todoListView = new TodoListView($todolistService);

$todoListView->showTodoList();
?>