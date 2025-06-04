<?php
namespace Agency\Model;
use DateTime;
class Project {
    private int $id;
    private string $name;
    private string $clientName;
    private DateTime $startDate;
    private ?DateTime $endDate;
    private array $tasks = [];

    public function __construct(int $id, string $name, string $clientName, DateTime $startDate, ?DateTime $endDate = null) {
        $this->id = $id;
        $this->name = $name;
        $this->clientName = $clientName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function addTask(Task $task): void {
        $this->tasks[] = $task;
    }

    public function getProgress(): float {
        if (count($this->tasks) === 0) return 0.0;
        $completed = count(array_filter($this->tasks, fn($task) => $task->isCompleted()));
        return round(($completed / count($this->tasks)) * 100, 2);
    }

    public function getTasks(): array {
        return $this->tasks;
    }

    public function getName(): string {
        return $this->name;
    }
}
