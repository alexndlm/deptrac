<?php

/*
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @link      http://phpdoc.org
 *
 */
declare (strict_types=1);
namespace DEPTRAC_INTERNAL\phpDocumentor\Reflection\PseudoTypes;

use DEPTRAC_INTERNAL\phpDocumentor\Reflection\PseudoType;
use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Type;
use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Types\String_;
use function sprintf;
/** @psalm-immutable */
class StringValue implements PseudoType
{
    /** @var string */
    private $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function getValue() : string
    {
        return $this->value;
    }
    public function underlyingType() : Type
    {
        return new String_();
    }
    public function __toString() : string
    {
        return sprintf('"%s"', $this->value);
    }
}
