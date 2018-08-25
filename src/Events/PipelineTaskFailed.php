<?php

namespace Naugrim\PipelineTasks\Events;

use Naugrim\PipelineTasks\Exceptions\PipelineTaskFailedException;
use Naugrim\PipelineTasks\Task;

class PipelineTaskFailed
{
    /**
     * Failed task.
     *
     * @var Task
     */
    public $task;

    /**
     * Exception with failure info.
     *
     * @var PipelineTaskFailedException
     */
    public $exception;

    /**
     * PipelineTaskFailed constructor.
     *
     * @param Task                        $task
     * @param PipelineTaskFailedException $e
     */
    public function __construct(Task $task, PipelineTaskFailedException $e)
    {
        $this->task = $task;
        $this->exception = $e;
    }
}
