<?php
namespace Agency\Model;

use Agency\Model\Task;

class Developer {
    private int $id;
    private string $name;
    private array $skills;
    private array $assignedTasks = [];

    public function __construct(int $id, string $name, array $skills) {
        $this->id = $id;
        $this->name = $name;
        $this->skills = $skills;
    }

    public function assignTask(Task $task): void {
        $this->assignedTasks[] = $task;
    }

    public function getWorkload(): int {
        return count(array_filter($this->assignedTasks, fn($task) => !$task->isCompleted()));
    }

    public function getName(): string {
        return $this->name;
    }
}
