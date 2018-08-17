# doomsday-dialog
This is a playground for some Symfony Console stuff

## Installation

1. Run `composer install` in the home directory

## Running the CLI command

Output a failed message:

```
./doomsday example
```

Output a success message:

```
./doomsday example --param=bacon
```

## What are all the pieces?

* `.gitignore` is a file that tells git to ignore certain files so that you don't accidentally commit them to your repo.
* `README.md` is this file. Whee!
* `composer.json` is the file that tells composer what to install in a `vendor/` directory and how autoloading should work.
* `composer.lock` this is the file that contains the exact version numbers of the external dependencies that you are _requiring_ in your `composer.json` file. If this file doesn't exist when you type `composer install`, the file will get created. Otherwise, that command will install the versions specified in the lock file. Typing `composer update` will update the lock file (this isn't needed unless you are purposefully updating).
* `doomsday` is a PHP file without the extension. It has `#!/usr/bin/php` at the top which makes it executable.
* `src/` is the directory where your main code should go. Create directories as needed.
* `src/Commands/` is the directory where your doomsday commands should go. Most likely you'll only have one command that kicks off your little game.