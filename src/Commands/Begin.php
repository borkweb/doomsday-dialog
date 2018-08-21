<?php
namespace DoomsdayDialog\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\{InputArgument, InputInterface, InputOption};
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

$include_dir = $OStatements["Statement_Dir"]. "/src/";
require($include_dir. "OutputStatements.php");


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
				echo $Intro;
                $this->io->title('Hello. I require information. Please respond?');
                $this->io->ask('Please, will you talk with me?', 'Y');
            }
            
		}

		// output the message using the state as the method name. There's both an error() and a success() method in SymfonyStyle
		// @see: https://symfony.com/doc/current/console/style.html#result-methods
		$this->io->$state( "You passed in: {$param}" );
	}
}