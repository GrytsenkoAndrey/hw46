<?php
/**
 * Created by PhpStorm.
 * User: APG
 * Date: 14.09.2020
 * Time: 18:50
 */
declare(strict_types = 1);

namespace App;

use \Symfony\Component\Console\Command\Command;
use \Symfony\Component\Console\Input\InputArgument;
use \Symfony\Component\Console\Input\InputInterface;
use \Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    /**
     * configure function
     */
    protected function configure()
    {
        $this->setName('say_hello')
            ->setDescription('Say Hello to <name> application')
            ->addArgument('name', InputArgument::REQUIRED, 'Enter your name');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        $output->writeln("Hello " . $name);
    }
}
