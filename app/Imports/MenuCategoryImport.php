<?php

namespace App\Imports;

use App\Models\MenuCategory;
use Maatwebsite\Excel\Concerns\ToModel;

class MenuCategoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MenuCategory([
           'name' => $row[1],
            'is_published'=> $row[2],
            'user_id'=> $row[3],
            'branch_id'=> $row[4],
        ]);
    }
}
