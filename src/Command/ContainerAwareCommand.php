<?php

namespace TE923ToMysql\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Application;

abstract class ContainerAwareCommand extends Command {
    /**
     * @var Silex\Application
     */
    protected $app;

    public function __construct(Application $app, $name = null) {
        parent::__construct($name);
        $this->app = $app;
    }
}