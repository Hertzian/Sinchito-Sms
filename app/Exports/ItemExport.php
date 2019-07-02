<?php

namespace App\Exports;

use App\Item;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;

// class ItemExport implements FromCollection
class ItemExport implements FromQuery
{
    use Exportable;

    public function __construct(int $item_list_id)
    {
        $this->item_list_id = $item_list_id;
    }

    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
        
        // return Item::all();
        
    // }

    public function item_list_id(int $item_list_id)
    {
        $this->item_list_id = $item_list_id;
        
        return $this;
    }

    public function query()
    {
        return Invoice::query()->whereYear('created_at', $this->year);
    }
}
