<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Core\Layer;

use Qossmic\Deptrac\Core\Ast\AstMap\AstMap;
use Qossmic\Deptrac\Core\Ast\AstMap\TokenReferenceInterface;

interface LayerResolverInterface
{
    /**
     * @return array<string, bool> layer name and whether the dependency is public(true) or private(false)
     */
    public function getLayersForReference(TokenReferenceInterface $reference, AstMap $astMap): array;

    public function isReferenceInLayer(string $layer, TokenReferenceInterface $reference, AstMap $astMap): bool;

    public function has(string $layer): bool;
}
