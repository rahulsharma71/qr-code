<?php


namespace App\Voyager\Database\Types\Common;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use TCG\Voyager\Database\Types\Type;

class MyCharType extends Type
{
    const NAME = 'my_char'; // Update the name to avoid conflict

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return "CHAR({$column['length']})";
    }
}

// namespace TCG\Voyager\Database\Types\Common;

// use Doctrine\DBAL\Platforms\AbstractPlatform;
// use TCG\Voyager\Database\Types\Type;

// class CharType extends Type
// {
//     public const NAME = 'char';

//     public function getSQLDeclaration(array $field, AbstractPlatform $platform)
//     {
//         $field['length'] = empty($field['length']) ? 1 : $field['length'];

//         return "char({$field['length']})";
//     }
// }
