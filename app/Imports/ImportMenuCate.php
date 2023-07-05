<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\MenuCategory;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportMenuCate implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $row)
    {
       return new MenuCategory([
            'name' => $row[1],
            'is_published'=> $row[2],
            'user_id'=> $row[3],
            'branch_id'=> $row[4],
        ]);
    }
}