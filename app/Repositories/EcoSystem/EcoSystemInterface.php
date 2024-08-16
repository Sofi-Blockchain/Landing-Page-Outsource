<?php

namespace App\Repositories\EcoSystem;

interface EcoSystemInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}