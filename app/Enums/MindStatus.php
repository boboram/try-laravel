<?php

namespace App\Enums;

enum MindStatus: string
{
    case Happy = 'HAPPY';
    case Sad = 'SAD';
    case Nervous = 'NERVOUS';
    case Wonderful = 'WONDERFUL';
    case Boring = 'BORING';
}
