<?php declare(strict_types=1);

namespace Berry\Htmx;

enum HxTarget: string
{
    case This = 'this';
    case ClosestParent = 'closest parent';
    case Next = 'next';
    case Previous = 'prev';
}
