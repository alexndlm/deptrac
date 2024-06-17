<?php

declare (strict_types=1);
namespace DEPTRAC_INTERNAL\PhpParser\Node\Expr\AssignOp;

use DEPTRAC_INTERNAL\PhpParser\Node\Expr\AssignOp;
class Minus extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Minus';
    }
}
