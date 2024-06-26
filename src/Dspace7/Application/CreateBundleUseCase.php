<?php

declare(strict_types=1);

namespace Epsomsegura\Laraveldspaceclient\Dspace7\Application;

use Epsomsegura\Laraveldspaceclient\Dspace7\Domain\Contracts\BundleContract;
use Epsomsegura\Laraveldspaceclient\Dspace7\Domain\Bundle;

final class CreateBundleUseCase
{
    private $bundleContract;
    public function __construct(
        BundleContract $bundleContract
    ) {
        $this->bundleContract = $bundleContract;
    }
    public function handler($bundle, string $itemUUID): ?Bundle
    {
        return $this->bundleContract->create($bundle, $itemUUID);
    }
}
