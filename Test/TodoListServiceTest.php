<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Respository/TodoListRespository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
use Entity\TodoList;
use Service\TodoListServiceImpl;
use Respository\TodoListRespositoryImpl;
function testShowTodoList(): void {
    $todoListRespository = new TodoListRespositoryImpl();
    $todoListRespository->todoList[1] = new TodoList("Belajar PHP");
    $todoListRespository->todoList[2] = new TodoList("Belajar PHP OOP");
    $todoListService = new TodoListServiceImpl($todoListRespository);
    $todoListService->showTodoList();
}
function testAddTodoList(): void {
    $todoListRespository = new TodoListRespositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRespository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->showtodoList();
}
function testRemoveTodoList(): void {
    $todoListRespository = new TodoListRespositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRespository);
    $todoListService->AddTodoList("Belajar PHP");
    $todoListService->addTodoList("BElajar PHP OPP");
    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
    $todoListService->removeTodoList(4);
    $todoListService->showTodoList();
}
testShowtodoList();
testAddTodoList();
testRemoveTodoList();
?>