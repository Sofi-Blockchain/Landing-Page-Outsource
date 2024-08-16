<?php

namespace App\Repositories\Music;

interface MusicInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}