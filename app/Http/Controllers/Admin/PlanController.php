<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Str;

class PlanController extends Controller
{
    private $repository;

    public function __construct(Plan $plan)
    {
        
        $this->repository =  $plan;

    }
    public function index()
    {
        $plans = $this->repository->latest()->paginate();

        return view('admin.pages.plans.index',[
            'plans' => $plans
        ]);
    }

    public function create()
    {
        //$data['frontendValidation'] = true;
        $data = [];
        return view('admin.pages.plans.create',$data);
    }

    public function store(StoreUpdatePlan $request)
    {
        $data = $request->except(['_token','_method']);
        $data['url'] = Str::kebab($data['name']);
        $this->repository->create($data);
        return redirect()->route('plans.index');
        
    }

    /**
     * Show a view based on the url
     */
    public function show(String $url)
    {   
        if (!$plan = $this->repository->where('url',$url)->first())
            return redirect()->back();

        return view('admin.pages.plans.show',['plan'=>$plan]);
    }

    /**
     * delete a view based on the url
     */
    public function destroy($id)
    {   
        if (!$plan = $this->repository->find($id))
            return redirect()->back();

        $this->repository->destroy($id);
        return redirect()->route('plans.index');
    }

     /**
     * edit view based on the id
     */
    public function edit($id)
    {   
        
        if (!$plan = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.plans.edit',['plan'=>$plan]);
    }

    /**
     * Update a plan based on the id
     */
    public function update(StoreUpdatePlan $request,$id)
    {   
        if (!$plan = $this->repository->find($id))
            return redirect()->back();

        $data = $request->all();
        $data['url'] = Str::kebab($data['name']);
        $plan->update($data);
        return redirect()->route('plans.show',$data['url']);
    }

    /**
     * Seach for plan
     */
    public function search(Request $request)
    {   
        if (!$plans = $this->repository->search($request->filter))
            return redirect()->back();

        $filters = $request->only(['filter','page']);
        
        return view('admin.pages.plans.index',['plans'=>$plans,'filters'=>$filters]);
    }



    
}
