<?php declare(strict_types=1);

namespace MW\PhpTraining;

class Kernel {
    public function start(): void
    {
        $application = new Application();
        $application->run();
    }
}

