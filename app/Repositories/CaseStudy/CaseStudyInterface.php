<?php

namespace App\Repositories\CaseStudy;

interface CaseStudyInterface
{
    public function datatable();

    public function create($data);

    public function update($data);

    public function delete($id);


}