<?php

namespace krasavchegUa\BarBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GreetingCommand extends Command
{
    public function configure()
    {
        $this->setName('bar:greeting');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Greetings from Bar!');
    }
}
