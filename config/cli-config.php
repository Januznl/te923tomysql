<?php
use Symfony\Component\Console\Application;
use Symfony\Component\Yaml\Yaml;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;



$conn = Yaml::parse(__DIR__.'/config.yml');
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src/Entity/"), $isDevMode, null, null, false);

$em = EntityManager::create($conn, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
return $helperSet;
?>