<?php

namespace Naugrim\PipelineTasks\Tests\Stubs\Tasks\TaskThatSucceeds\Pipes;

use Naugrim\PipelineTasks\Pipe;

class FirstPipe extends Pipe
{
    public function handle()
    {
        return 'FirstPipeResultFromTaskThatSucceeds';
    }

    public function overriddenHandleMethod(array $payload, \Closure $next)
    {
        $payload[1]->setPipeResult($this->name(), 'FirstPipeResultFromTaskThatSucceedsWithOverriddenMethod');

        return $next($payload);
    }
}
