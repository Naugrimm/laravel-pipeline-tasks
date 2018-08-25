<?php

namespace Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds\Pipes;

use Naugrim\PipelineTasks\Pipe;
use Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds\InjectedExample;

class SecondPipe extends Pipe
{
    public function handle(InjectedExample $example)
    {
        return $example->value();
    }
}
