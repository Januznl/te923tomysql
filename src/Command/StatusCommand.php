<?php

namespace TE923ToMysql\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
Use TE923ToMysql\Lib as Lib;

class StatusCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('status');
        $this->setDescription('Show weatherstation status');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //Base variables
        $em     = $this->em;
        $db     = $em->getConnection();
		$mapper = new Lib\Mapper();
		
        // Get Raw data from weatherstation
		$data   = $this->te923tool->getStatusData();
		
		// Convert raw data to record
		$record = $mapper->mapStatusDataToRecord($data);
		
		// Generate output
        $output->writeln('Weatherstation Status:');
        $output->writeln('');
        $output->writeln('Battery Status:');
        $output->writeln('');
        $output->writeln('Wind sensor: '.(($record['battStatusWind'] == 1)? 'OK' : 'NOTOK') );
        $output->writeln('Rain sensor: '.(($record['battStatusRain'] == 1)? 'OK' : 'NOTOK') );
        $output->writeln('UV   sensor: '.(($record['battStatusUV']   == 1)? 'OK' : 'NOTOK') );
        
    }

}
?>