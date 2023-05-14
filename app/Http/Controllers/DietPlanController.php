<?php

namespace App\Http\Controllers;

use App\Models\DietPlan;
use App\Http\Requests\StoreDietPlanRequest;
use App\Http\Requests\UpdateDietPlanRequest;
use App\Models\FoodItem;

use Illuminate\Http\Request;

class DietPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function additem(Request $request)
    {
        $data=$request->validate([
            'food_id' => 'required',
            'plan_id' => 'required',

        ]
        );
        //$fooditem = FoodItem::find($data['food_id']);
        $dietplan = DietPlan::find($data['plan_id']);
        $dietplan->fooditems()->attach($data['food_id']);

        return $dietplan->fooditems;

        

        

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreDietPlanRequest $request)
    {
        $request->validated($request->only(['name', 'description']));
        
        DietPlan::create([ 

            'name' => $request->name,
            'description' => $request->email,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDietPlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DietPlan $dietPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DietPlan $dietPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDietPlanRequest $request, DietPlan $dietPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DietPlan $dietPlan)
    {
        //
    }
}
