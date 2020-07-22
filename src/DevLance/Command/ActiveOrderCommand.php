<?php

namespace App\DevLance\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ActiveOrderCommand extends Command
{

    protected function configure()
    {
        $this->setName('devlance:order:active')
            ->setDescription('Get all active orders')
            ->setHelp('Command gets all active job orders');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Implement get all active orders from DB
        echo "No active orders";
    }
}