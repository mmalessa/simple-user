<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Domain\User\User;
use Domain\User\UserId;
use ValueObjects\Internet\Email;

class MmTestCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mm:test')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$userId = new UserId();
    	$userName = "Jan";
    	$userSurname = "Kowalski";
    	$userEmail = new Email("jan.kowalski@nigdzie.nigdzie.oo");

    	$user = new User($userId, $userName, $userSurname, $userEmail);

    	var_dump($user);

//         $argument = $input->getArgument('argument');
//         if ($input->getOption('option')) {
//             // ...
//         }
//         $output->writeln('Command result.');
    }

}
