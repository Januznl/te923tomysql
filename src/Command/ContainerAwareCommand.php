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
    protected $em;

    /**
     * @var TE923ToMysql\Lib\TE923Tool
     */
    protected $te923tool;

    public function __construct( $em, $TE923Tool, $name = null) {
        parent::__construct($name);
        $this->em = $em;
        $this->te923tool = $TE923Tool;
    }
}