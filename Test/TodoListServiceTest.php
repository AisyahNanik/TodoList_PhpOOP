<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
function testShowTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = new TodoList("Belajar PHP");
    $todoListRepository->todoList[2] = new TodoList("Belajar PHP OOP");
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->showTodoList();
}
function testAddTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->showTodoList();
}
function testRemoveTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
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