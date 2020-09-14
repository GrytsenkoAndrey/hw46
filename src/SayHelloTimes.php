<?php
/**
 * Created by PhpStorm.
 * User: APG
 * Date: 14.09.2020
 * Time: 19:06
 */
declare(strict_types = 1);

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class SayHelloTimes extends Command
{
    protected function configure()
    {
        $this->setName('say_hello')
            ->setDescription('Say hello <name> with option <times> with 1 as default value')
            ->addArgument('name', InputArgument::REQUIRED, 'Enter your name or string')
            ->addOption('times', null, InputOption::VALUE_OPTIONAL, 'Enter how many times you want to print the output', 1);
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $source = $input->getArgument('name');

        for ($i = 1, $count = intval($input->getOption('times')); $i <= $count; $i++) {
            $output->writeln('Hello ' . $source);
        }
    }
}