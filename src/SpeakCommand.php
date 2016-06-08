<?php 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

		
class SpeakCommand extends Command
{
	
	public function configure()
	{
		$this->setName('speak')
				->setDescription('Speak a Message')
				->addArgument('message', InputArgument::REQUIRED, 'What message should i speak ?');
	}

	public function execute(InputInterface $input, OutputInterface $output)
	{
		exec('say ' . $input->getArgument('message'));

		$output->writeln('All done'); 

	}
}