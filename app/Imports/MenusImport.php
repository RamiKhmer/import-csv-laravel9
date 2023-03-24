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
            'name' => $row[0],
            'original_price'=> $row[1],
            'unit'=> $row[2],
            'desc'=> $row[3],
            'is_published'=> $row[4],
            'user_id'=> $row[5],
            'branch_id'=> $row[6],
            'menu_category_id' => $row[7],
        ]);

    }
}
