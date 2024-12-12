<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Respository/TodoListRespository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../View/TodoListView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\TodoList;
use \Respository\TodoListRespositoryImpl;
use \Service\TodoListServiceImpl;
use \view\TodoListView;

function testViewShowTodoList(): void 
{

    $todoListRespository = new TodoListRespositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRespository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodolist("Belajar PHP");
    $todoListService->addTodolist("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListView->showTodoList();

}

function testViewAddTodoList(): void 
{
    $todoListRespository = new TodoListRespositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRespository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");
    $todoListService->showTodoList();
    $todoListView->addTodoList();
    $todoListService->showTodoList();
    $todoListView->addTodoList();
    $todoListService->showTodoList();
}

function testViewRemoveTodoList(): void 
{
    $todoListRespository = new TodoListRespositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRespository);
    $todoListView = new TodoListView($todoListService);
    
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addtodoList("Belajar PHP Database");
    $todoListService->showTodoList();
    $todoListView->removeTodoList();
    $todoListService->showTodoList();
    $todoListView->removeTodoList();
    $todoListService->showTodoList();
}
testViewRemoveTodoList();
?>