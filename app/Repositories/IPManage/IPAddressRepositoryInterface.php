<?php

namespace App\Repositories\IPManage;

interface IPAddressRepositoryInterface {
    // get all / paginated data
    public function getAll(int|null $resourcePerPage, string $orderBy, string $sortBy): mixed;

    // store a new one
    public function storeResource(array $data): mixed;

    // get single data
    public function getByColumn(string $columnName, string $value): mixed;

}
