<?php
namespace Agency\Model;

use Agency\Model\Developer;
use Agency\Exception\TaskAlreadyCompletedException;

abstract class Task {
    protected int $id;
    protected string $title;
    protected Developer $assignedTo;
    protected bool $isCompleted = false;

    public function __construct(int $id, string $title, Developer $assignedTo) {
        $this->id = $id;
        $this->title = $title;
        $this->assignedTo = $assignedTo;
        $assignedTo->assignTask($this);
    }

    public function completeTask(): void {
        if ($this->isCompleted) {
            throw new TaskAlreadyCompletedException("Tâche déjà accomplie");
        }
        $this->isCompleted = true;
    }

    public function isCompleted(): bool {
        return $this->isCompleted;
    }

    public function getTitle(): string {
        return $this->title;
    }
}
