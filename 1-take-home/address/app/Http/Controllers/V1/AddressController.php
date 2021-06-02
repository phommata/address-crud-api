<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Request $request)
    {
        return response()->json(Address::create($request->all()), Response::HTTP_CREATED);
    }

    public function read(Request $request)
    {
        return response()->json(Address::filter($request->all())->get());
    }

    public function readById($id)
    {
        return response()->json(Address::find($id));
    }

    public function update($id, Request $request)
    {
        $address = Address::findOrFail($id);
        $address->update($request->all());

        return response()->json($address, Response::HTTP_OK);
    }

    public function delete($id)
    {
        Address::findOrFail($id)->delete();
        return response('Deleted Successfully', Response::HTTP_OK);
    }
}
