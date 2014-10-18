<?php

namespace TE923ToMysql\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;

class DoctrineCommand extends ContainerAwareCommand
{
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $doctrine = $this->getContainer()->get('doctrine');

        $em = $doctrine->getEntityManager();
        $db = $em->getConnection();

        $helperSet = $this->getHelperSet();
        $helperSet->set( new ConnectionHelper( $db ), 'db' );
        $helperSet->set( new EntityManagerHelper( $em ), 'em' );

	$output = ConsoleRunner::createHelperSet($entityManager);
        parent::execute( $input, $output );
    }

}
?>