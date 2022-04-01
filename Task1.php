<?php

namespace src;

class Task1
{
    function main(int $digit): string
    {
        return $digit > 30
            ? 'More than 30'
            : ($digit > 20
                ? 'More than 20'
                : ($digit > 10
                    ? 'More than 10'
                    : 'Less than 10'));
    }
}
