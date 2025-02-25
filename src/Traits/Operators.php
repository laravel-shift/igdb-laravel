<?php

declare(strict_types=1);

namespace MarcReichel\IGDBLaravel\Traits;

trait Operators
{
    /**
     * All the available clause operators.
     */
    public array $operators = [
        '=',
        '<',
        '>',
        '<=',
        '>=',
        '!=',
        '!=',
        '~',
        'like',
        'ilike',
        'not like',
        'not ilike',
    ];
}
