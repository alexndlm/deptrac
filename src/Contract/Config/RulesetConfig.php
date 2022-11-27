<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Contract\Config;

final class RulesetConfig
{
    public LayerConfig $layerConfig;

    /** @var array<LayerConfig> */
    private array $accessableLayers = [];

    /** @param  array<LayerConfig> $layerConfigs */
    public function __construct(LayerConfig $layerConfig, array $layerConfigs)
    {
        $this->layerConfig = $layerConfig;
        $this->accesses(...$layerConfigs);
    }

    public static function create(LayerConfig $layerConfig): self
    {
        return new self($layerConfig, []);
    }

    public function accesses(LayerConfig ...$layerConfigs): self
    {
        foreach ($layerConfigs as $layerConfig) {
            $this->accessableLayers[] = $layerConfig;
        }

        return $this;
    }

    /** @return non-empty-array<array-key, string> */
    public function toArray(): array
    {
        $data = array_map(static fn (LayerConfig $layerConfig) => $layerConfig->name, $this->accessableLayers);

        return $data + ['name' => $this->layerConfig->name];
    }
}
