<?php

namespace TE923ToMysql\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DoctrineCommand extends DoctrineAwareCommand
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
        //Setup doctrine based on config file
        $this->setupDoctrine($input);

        $repo = $this->em->getRepository('TE923ToMysql\Entity\Archive');

        /* @var $record \TE923ToMysql\Entity\Archive */
        $record  = $repo->find(1416520800);
        if ($record !== null) {
            $output->writeln('Temp is '.$record->getExtratemp1());
        }



        $output->writeln('Command with Entity manager !');
        
    }
}
