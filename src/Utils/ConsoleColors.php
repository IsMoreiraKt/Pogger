<?php

namespace Pogger\Utils;

/**
 * ConsoleColors class provides constants for various console color codes
 * that can be used to color text output in the terminal.
 */
class ConsoleColors
{
    public const RESET      = "\033[0m";
    public const RED        = "\033[0;31m";
    public const BOLDRED    = "\033[1;31m";
    public const ORANGE     = "\033[38;5;214m";
    public const YELLOW     = "\033[0;33m";
    public const BOLDYELLOW = "\033[1;33m";
    public const GREEN      = "\033[0;32m";
    public const CYAN       = "\033[0;36m";
    public const BLUE       = "\033[0;34m";
    public const WHITE      = "\033[0;37m";
}
