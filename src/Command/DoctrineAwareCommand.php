<?php

namespace TE923ToMysql\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Application;
use TE923ToMysql\Lib\ConfigFactory;

abstract class DoctrineAwareCommand extends Command
{

    /* @var EntityManager */
    protected $em;

    protected function setupDoctrine(InputInterface $input)
    {
        $isDevMode = null;
        $configPath = $input->getOption('config');

        $configFactory = new ConfigFactory($configPath);
        $config = $configFactory->getDoctrine();

        $entityConfig = Setup::createAnnotationMetadataConfiguration(
            array(__DIR__."/src"),
            $isDevMode,
            null,
            null,
            false
        );
        $this->em = EntityManager::create($config->getAllSettings(), $entityConfig);
    }
}
