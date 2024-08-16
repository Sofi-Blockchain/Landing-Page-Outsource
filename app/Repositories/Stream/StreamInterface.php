<?php

namespace App\Repositories\Stream;

interface StreamInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}