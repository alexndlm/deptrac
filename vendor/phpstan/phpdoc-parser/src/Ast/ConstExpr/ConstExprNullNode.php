<?php

declare (strict_types=1);
namespace DEPTRAC_INTERNAL\PHPStan\PhpDocParser\Ast\ConstExpr;

use DEPTRAC_INTERNAL\PHPStan\PhpDocParser\Ast\NodeAttributes;
class ConstExprNullNode implements ConstExprNode
{
    use NodeAttributes;
    public function __toString() : string
    {
        return 'null';
    }
}
