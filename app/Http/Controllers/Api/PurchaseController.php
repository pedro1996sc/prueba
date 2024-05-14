<?php

namespace App\Http\Controllers\Api;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Requests\PurchaseRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\PurchaseResource;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $purchases = Purchase::paginate();

        return PurchaseResource::collection($purchases);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PurchaseRequest $request): Purchase
    {
        return Purchase::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase): Purchase
    {
        return $purchase;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PurchaseRequest $request, Purchase $purchase): Purchase
    {
        $purchase->update($request->validated());

        return $purchase;
    }

    public function destroy(Purchase $purchase): Response
    {
        $purchase->delete();

        return response()->noContent();
    }
}
