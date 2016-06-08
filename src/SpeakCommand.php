<?php 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

		
class SpeakCommand extends Command
{
	
	public function configure()
	{
		$this->setName('speak')
				->setDescription('Speak a Message');
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		exec('say "Say Your Name"');

	}
}