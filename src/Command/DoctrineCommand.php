<?php

namespace TE923ToMysql\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DoctrineCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
        ->setName('Test')
        ->setDescription('')
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        if ($input->hasOption('config')) {
//            $path = $input->getOption('config');
//            /** @var \TE923ToMysql\Lib\Config\Config $config */
//            $config = $this->di->get('config.settings');
//            $config->setConfigPath($path);
//
//        }

        $config = $this->di->get('config.settings');
        //var_dump($config);

        $em = $this->di->get('doctrine.entityManager');
        $repo = $em->getRepository('TE923ToMysql\Entity\Archive');

        /* @var $record \TE923ToMysql\Entity\Archive */
        $record  = $repo->find(1416520800);
        if ($record !== null) {
            $output->writeln('Temp is '.$record->getExtratemp1());
        }



        $output->writeln('Command with Entity manager !');
        
    }
}
