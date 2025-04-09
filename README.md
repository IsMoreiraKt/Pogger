# Pogger

Pogger is a simple and flexible PHP logging library that provides various log levels and output channels. You can easily integrate it into your PHP projects to manage and customize log messages in different ways.

<br>

## Prerequisites

To use Pogger, you need the following:

1. **PHP**: 7.4 or higher is recommended;
2. **Composer**: For managing dependencies;

<br>

## Installing Dependencies

To install the required dependencies, run the following command:

```bash
composer install
```

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
