<?php

namespace krasavchegUa\BarBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    public function configure()
    {
        $this->setName('bar:hi');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hi from Bar!');
    }
}
