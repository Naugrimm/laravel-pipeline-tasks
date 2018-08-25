<?php

namespace Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds;

use Naugrim\PipelineTasks\Task;
use Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds\Pipes\FirstPipe;

class ExampleTaskThatSucceeds extends Task
{
    public function pipes()
    {
        return [
            FirstPipe::class,
        ];
    }
}
