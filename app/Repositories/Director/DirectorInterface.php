<?php

namespace App\Repositories\Director;

interface DirectorInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}