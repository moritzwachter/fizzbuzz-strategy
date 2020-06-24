<?php

namespace MW\PhpTraining;

class Kernel {
    public function start()
    {
        $application = new Application();
        $application->run();
    }
}

