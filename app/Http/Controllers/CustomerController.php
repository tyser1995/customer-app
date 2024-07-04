<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('last_name')->get();
        return response()->json($customers);
    }

    public function show($id)
    {
        return Customer::find($id);
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return response()->json($customer, 200);
    }

    public function delete($id)
    {
        Customer::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
