# Pogger

Pogger is a simple and flexible PHP logging library that provides various log levels and output channels. You can easily integrate it into your PHP projects to manage and customize log messages in different ways.

<br>

## How to Install

### With Composer

If you're using Composer in your project (which you should), just run:

```bash
composer require ismoreirakt/pogger
```

This will download the latest stable release and make Pogger available through autoload.

### Without Composer

If you're not using Composer globally or prefer to clone the repo directly:

#### Prerequisites

To use Pogger, you need the following:

1. **PHP**: 7.4 or higher is recommended;
2. **Composer**: For managing dependencies;

#### Clone de Repository

```bash
git clone --branch v0.0.1 --depth 1 https://github.com/IsMoreiraKt/Pogger
cd Pogger
```

#### Installing Dependencies

Inside the project directory, install the required dependencies:

```bash
composer install
```

You can now include the library manually in your code or set up autoloading via vendor/autoload.php.

<br>

## How to Use the Library

Pogger provides a Log class with static methods for logging messages at various levels. You can use the library with just a few lines of code.

#### Example Usage:

```php
<?php

use Pogger\Log;

Log::success("The operation was successful!");
Log::error("A system error occurred!");
Log::info("Here is some additional info.");
```

#### Example with Context:

You can also pass an optional context (as an array) to include additional information with the log message.

```php
Log::error(
    "A system error occurred.",
    [
        'exception' => $exception,
        'file' => $file
    ]
);
```

<br>

## License

This project is released under the [MIT license](./LICENSE).
