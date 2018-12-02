<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 15.36
 */

namespace App\Services;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Class CommandManager
 * @package App\Services
 */
class CommandManager
{
    /**
     * @var YearsCalculator
     */
    private $yearsCalculator;

    /**
     * @var AdultCheck
     */
    private $adultChecker;

    /**
     * CommandManager constructor.
     * @param YearsCalculator $yearsCalculator
     * @param AdultCheck $adultChecker
     */
    public function __construct(YearsCalculator $yearsCalculator, AdultCheck $adultChecker)
    {
        $this->yearsCalculator = $yearsCalculator;
        $this->adultChecker = $adultChecker;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $birthday = $input->getArgument('birthday');

        $age = $this->yearsCalculator->calculate($birthday);
        $io->note('I am ' . $age . ' years old.');
        if ($input->getOption('adult')) {
            if ($this->adultChecker->isAdult($age)) {
                $io->success('Am I an adult? ---- YES !!!');
            } else {
                $io->warning(' Am I an adult? ---- NO !!!');
            }
        }
    }
}