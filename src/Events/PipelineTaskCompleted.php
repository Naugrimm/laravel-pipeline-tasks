<?php

namespace Naugrim\PipelineTasks\Events;

use Naugrim\PipelineTasks\Task;

class PipelineTaskCompleted
{
    /**
     * Completed task.
     *
     * @var Task
     */
    public $task;

    /**
     * PipelineTaskCompleted constructor.
     *
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }
}
