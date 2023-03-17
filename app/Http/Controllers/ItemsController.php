<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:web1,web2,web3']);
    }

    public function index()
    {
        $items     = Item::paginate(2);
        $items_db2 = Item::on('mysql2')->paginate(2);
        $items_db3 = Item::on('mysql3')->paginate(2);

        $total_items=$items->concat($items_db2)->concat($items_db3)->sortBy('created_at');
        
        return view('items',compact('total_items'));
    }

    public function show(string $uuid ,int $db)
    {
        $item=Item::on('mysql'.$db)->where('uuid',$uuid)
                ->with(['comments_db_1_eco1',
                        'comments_db_2_eco1',
                        'comments_db_3_eco1',
                        'comments_db_1_eco2',
                        'comments_db_2_eco2',
                        'comments_db_3_eco2',
                        'comments_db_1_eco3',
                        'comments_db_2_eco3',
                        'comments_db_3_eco3'])->first();

        return view('items_details',compact('item'));
    }
}
