<?php

namespace App\Command;

// Tools
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class RegenerateAppSecretCommand extends Command
{
    protected static $defaultName = 'regenerate-app-secret';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $a = 'sdgsdgergt384egherufeuh3483h8';
        $secret = '';
        for ($i = 0; $i < 32; $i++) {
            $secret .= $a[rand(0, 15)];
        }

        $r = shell_exec('sed -i -E "s/^APP_SECRET=.{32}$/APP_SECRET=' . $secret . '/" .env');

        $io->success('New APP_SECRET was generated: ' . $secret);

        return 0;
    }
}