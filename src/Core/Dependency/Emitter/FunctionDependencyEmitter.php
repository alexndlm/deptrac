<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Core\Dependency\Emitter;

use Qossmic\Deptrac\Core\Ast\AstMap\AstMap;
use Qossmic\Deptrac\Core\Ast\AstMap\DependencyTokenType;
use Qossmic\Deptrac\Core\Dependency\Dependency;
use Qossmic\Deptrac\Core\Dependency\DependencyList;

final class FunctionDependencyEmitter implements DependencyEmitterInterface
{
    public function getName(): string
    {
        return 'FunctionDependencyEmitter';
    }

    public function applyDependencies(AstMap $astMap, DependencyList $dependencyList): void
    {
        foreach ($astMap->getFileReferences() as $astFileReference) {
            foreach ($astFileReference->functionLikeReferences as $astFunctionReference) {
                foreach ($astFunctionReference->dependencies as $dependency) {
                    if (DependencyTokenType::SUPERGLOBAL_VARIABLE === $dependency->type) {
                        continue;
                    }

                    if (DependencyTokenType::UNRESOLVED_FUNCTION_CALL === $dependency->type) {
                        continue;
                    }

                    $dependencyList->addDependency(
                        new Dependency(
                            $astFunctionReference->getToken(),
                            $dependency->token,
                            $dependency->fileOccurrence
                        )
                    );
                }
            }
        }
    }
}