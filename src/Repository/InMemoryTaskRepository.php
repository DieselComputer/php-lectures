<?php

namespace App\Repository;

use App\Model\Task;
class InMemoryTaskRepository implements TaskRepositoryInterface
{

    private array $tasks = []; 

    public function __construct()
    {
        $this->tasks = [
            new Task("Купить кофе"),
            new Task("Проспать пары"),
            new Task("Опоздать на пары")
        ];
    }

    public function findAll(): array
    {
        return $this->tasks; 
    }

    public function add(Task $task): void
    {
        $this->tasks[] = $task; 
    }
}