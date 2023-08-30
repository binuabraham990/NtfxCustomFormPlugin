<?php

declare(strict_types=1);

namespace NtfxCustomFormPlugin\Core\Content\PackagingType;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use NtfxCustomFormPlugin\Core\Content\PackagingType\PackagingTypeCollection;
use NtfxCustomFormPlugin\Core\Content\PackagingType\PackagingTypeEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FloatField;

class PackagingTypeDefinition extends EntityDefinition {

    public const ENTITY_NAME = 'ntfx_packaging_type';

    public function getEntityName(): string {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string {
        return PackagingTypeCollection::class;
    }

    public function getEntityClass(): string {
        return PackagingTypeEntity::class;
    }

    protected function defineFields(): FieldCollection {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('name', 'name'))->addFlags(new Required()),
            (new FloatField('height', 'height')),
            (new FloatField('width', 'width')),
            (new FloatField('length', 'length')),
        ]);
    }
}
