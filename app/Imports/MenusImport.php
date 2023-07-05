<?php

namespace App\Imports;

use App\Models\Menu;
use Maatwebsite\Excel\Concerns\ToModel;

class MenusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Menu([
            'name' => $row[1],
            'original_price'=> $row[2],
            'unit'=> $row[3],
            'desc'=> $row[4],
            'is_published'=> $row[5],
            'user_id'=> $row[6],
            'branch_id'=> $row[7],
            'menu_category_id' => $row[8],
        ]);

    }
}
