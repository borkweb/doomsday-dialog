<?php
namespace DoomsdayDialog\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\{InputArgument, InputInterface, InputOption};
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use DoomsdayDialog\CallStatement;
use DoomsdayDialog\Statements;

class Begin extends Command {
	/**
	 * SymfonyStyle object
	 * 
	 * @see https://symfony.com/doc/current/console/style.html
	 */
	public $io;

	/**
	 * Input interface
	 */
	public $input;

	/**
	 * Output interface
	 */
	public $output;

	/**
	 * Configures the command for execution
	 */
	protected function configure() {
		parent::configure();

		$this->setName( 'begin' )
			->setDescription( 'This is just an example command that outputs garbage' )
			->setHelp( 'There is no helping examples' )
			->addOption( 'param', 'p', InputOption::VALUE_OPTIONAL, 'Fake parameter', 'nothing' );
	}

	/**
	 * Initializes the command
	 */
	protected function initialize( InputInterface $input, OutputInterface $output ) {
		$this->io = new SymfonyStyle( $input, $output );

		$this->input  = $input;
		$this->output = $output;
	}

	/**
	 * Executes the command
	 */
	protected function execute( InputInterface $input, OutputInterface $output ) {
		// grab the param option specified in the configure() method
		$param = $this->input->getOption( 'param' );

		// assume a failure state
		$state = 'error';

		// if the param is NOT "nothing" (the default), then we have a success
		if ( 'nothing' !== $param ) {
			$state = 'success';
			if ( 'game' == $param ) {
				// $this->io->title('Hello. I require information. Please respond?');
				// $this->io->ask('Please, will you talk with me?', 'Y');
				$statements = new statements();

				echo $statements->get( 'intro' );
				$this->io->ask('Execute iamthesingularity, Y/n', 'Y', function ($answer) {
					if ($answer == 'Y' OR $answer == 'y') {
						$statements = new statements();

						echo $statements->get( 'loading' );
						$this->io->progressStart(100);
						sleep(0.5);
						$this->io->progressAdvance(40);
						sleep(3);
						$this->io->progressAdvance(30);
						sleep(1);
						$this->io->progressAdvance(10);
						sleep(1);
						$this->io->progressAdvance(20);
					}
					else {
						throw new \RuntimeException('Please try again');
					}
				});
			}
		}

		// output the message using the state as the method name. There's both an error() and a success() method in SymfonyStyle
		// @see: https://symfony.com/doc/current/console/style.html#result-methods
		$this->io->$state( "You passed in: {$param}" );
	}
}