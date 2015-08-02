<?php

namespace TE923ToMysql\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Application;

abstract class ContainerAwareCommand extends Command
{
    protected $app;

    /* @var $di \Aura\Di\Container */
    protected $di;

    public function __construct($di, $name = null)
    {
        parent::__construct($name);
        $this->di = $di;
    }
}
