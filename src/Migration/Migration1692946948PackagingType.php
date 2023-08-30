<?php

declare(strict_types=1);

namespace NtfxCustomFormPlugin\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1692946948PackagingType extends MigrationStep {

    public function getCreationTimestamp(): int {
        return 1692946948;
    }

    public function update(Connection $connection): void {
        $query = <<<SQL
        CREATE TABLE IF NOT EXISTS `ntfx_packaging_type` (
            `id` binary(16) NOT NULL,
            `name` varchar(50) COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            `height` float NULL,
            `width` float NULL,
            `length` float NULL,
            `created_at` datetime(3) NULL,
            `updated_at` datetime NULL,
            PRIMARY KEY (`id`)
          ) ENGINE='InnoDB' 
            DEFAULT CHARSET = utf8mb4
            COLLATE 'utf8mb4_unicode_ci';
        SQL;

        $connection->executeStatement($query);
    }

    public function updateDestructive(Connection $connection): void {
        // implement update destructive
    }
}
