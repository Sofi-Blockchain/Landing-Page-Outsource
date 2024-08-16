<?php

namespace App\Repositories\MilesStone;

interface MilesStoneInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}