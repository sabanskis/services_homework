<?php

namespace App\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class AgeCalculatorCommand
 * @package App\Command
 */
class AgeCalculatorCommand extends ContainerAwareCommand
{
    protected static $defaultName = 'app:age:calculator';

    /**
     *
     */
    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('birthday', InputArgument::REQUIRED, 'Birthday date')
            ->addOption('adult', null, InputOption::VALUE_NONE, 'Adult or no')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get("app.services.command_manager")->execute($input,$output);
    }
}
