#Wheels

Wheels is a PHP implementation of the Command Bus pattern for DDD.

[![Build Status](https://travis-ci.org/maximecolin/wheels.svg)](https://travis-ci.org/maximecolin/wheels)

##Disclaimer

This is a very basic and simple implementation. It has to grow up :)

##Installation

```
composer require maximecolin/wheels
```

##Purpose

The aim of the command bus pattern is to isolate your domain code in atomic, testable and reusable classes and to execute them through a dedicated service.

##Usage

Create a command class to handle data you need. Attributes can be set on contruct, fill through a form, set by other services, ...

```
class CreateArticleCommand implements CommandInterface
{
	public $title;
	public $content;
	
	public function __construct($title, $content)
	{
		$this->title   = $title;
		$this->content = $content;
	}
}
```

Create an handler which will process your command.

```
class CreateCommandHandler implements CommandHandlerInterface
{
	public function handle(CommandInterface $command)
	{
		// Place here you domain code which create an article ...
	}
}
```



```
// Usualy, have a service to get the bus
$bus = new CommandBus();
$bus->addResolver(new ClassNameResolver());

$command = new CreateArticleCommand('My article name', 'My article content');

$bus->execute($command);
```

##Comming soon

Event sourcing integration.

