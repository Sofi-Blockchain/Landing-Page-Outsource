<?php

namespace App\Repositories\Partner;

interface PartnerInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);
}