<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'product_name'=> $row[0], 
            'group_id' => $row[1], 
            'cate_id'=> $row[2], 
            'type_id' => $row[3], 
            'desc' => $row[4],
        ]);
    }
}
