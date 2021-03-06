<?php declare(strict_types=1);

namespace Gruberro\MongoDbMigrations;

interface ContextualMigrationInterface
{
    /**
     * Returns a list of context names
     *
     * @return array
     */
    public function getContexts(): array;
}
