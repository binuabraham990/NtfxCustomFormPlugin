<?php

declare(strict_types=1);

namespace NtfxCustomFormPlugin\Core\Content\PackagingType;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;
use NtfxCustomFormPlugin\Core\Content\PackagingType\PackagingTypeEntity;

/**
 * @extends EntityCollection<AuthorEntity>
 */
class PackagingTypeCollection extends EntityCollection {

    public function getApiAlias(): string {
        return 'ntfx_packaging_type';
    }

    protected function getExpectedClass(): string {
        return PackagingTypeEntity::class;
    }
}
