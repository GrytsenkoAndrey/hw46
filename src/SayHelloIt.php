<?php
/**
 * Created by PhpStorm.
 * User: APG
 * Date: 14.09.2020
 * Time: 19:22
 */
declare(strict_types = 1);

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class SayHelloIt extends Command
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setName('say_hello_it')
            ->setDescription('format line in cAmEl style');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $exitCode = 0;

        # ask name
        $question = new Question('Enter your name', '');
        $helper = $this->getHelper('question');
        $name = $helper->ask($input, $output, $question);
        # ask age
        $question = new Question('Enter your age', '');
        $helper = $this->getHelper('question');
        $age = $helper->ask($input, $output, $question);
        # ask gender
        $question = new ChoiceQuestion(
            'Select your gender',
            ['M', 'W']
        );
        $question->setErrorMessage('Gender %s is invalid');
        $gender = $helper->ask($input, $output, $question);

        $output->writeln('Your name ' . $name . ', age is ' . $age . ' and you are ' . $gender);

        return $exitCode;
    }
}