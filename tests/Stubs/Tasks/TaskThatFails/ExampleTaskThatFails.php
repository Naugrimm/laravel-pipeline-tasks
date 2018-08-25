<?php

namespace Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatFails;

use Naugrim\PipelineTasks\Exceptions\PipelineTaskFailedException;
use Naugrim\PipelineTasks\Task;
use Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatFails\Pipes\FirstPipe;
use Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatFails\Pipes\SecondPipe;

class ExampleTaskThatFails extends Task
{
    public function pipes()
    {
        return [
            FirstPipe::class,
            SecondPipe::class,
        ];
    }

    public function failed(PipelineTaskFailedException $exception)
    {
        return 'ExceptionThrownFrom'.$exception->getPipeName();
    }
}
