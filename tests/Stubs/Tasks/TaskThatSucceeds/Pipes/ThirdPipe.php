<?php

namespace Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds\Pipes;

use Naugrim\PipelineTasks\Pipe;
use Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds\ExampleTaskThatSucceeds;

class ThirdPipe extends Pipe
{
    public function handle()
    {
        return $this->task instanceof ExampleTaskThatSucceeds ? 'TaskAvailable' : false;
    }
}
