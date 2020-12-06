<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index_all_orders()
    {
        return view('admin.all_orders.index');
    }

    public function index_add_order()
    {
        return view('admin.add_order.index');

    }
    public function index_non_paid_order()
    {
        return view('admin.non_paid_orders.index');
    }
}
