<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailPlan;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateDetailPlan;

class DetailsPlanController extends Controller
{

    protected $repository;
    protected $plan;

    public function __construct(DetailPlan $detailPlan, Plan $plan)
    {
        $this->repository = $detailPlan;
        $this->plan = $plan;
    }

    public function index($urlPlan)
    {
        if (!$plan = $this->plan->where('url', $urlPlan)->first())
            return redirect()->back();

        $details = $plan->details()->paginate();

        return view('admin.pages.plans.details.index', [
            'plan' => $plan,
            'details' => $details,
        ]);
    }

    public function create(String $urlPlan)
    {
        if (!$plan = $this->plan->where('url', $urlPlan)->first())
            return redirect()->back();
        
        return view('admin.pages.plans.details.create', ['plan'=>$plan]);
    }

    public function store(StoreUpdateDetailPlan $request, String $urlPlan)
    {
        if (!$plan = $this->plan->where('url', $urlPlan)->first())
            return redirect()->back();
        
        $plan->details()->create($request->all());

        return redirect()->route('details.plan.index', $plan->url);
    }

    public function show(String $urlPlan, String $detailId)
    {
        $detail = $this->repository->find($detailId);
        $plan = $this->plan->where('url', $urlPlan)->first();

        if(!$plan || !$detail)
            return redirect()->back();
        
        
        return view('admin.pages.plans.details.show',[
            'plan' => $plan,
            'detail' => $detail
        ]);
    }

    public function edit(String $urlPlan, String $detailId)
    {
        $detail = $this->repository->find($detailId);
        $plan = $this->plan->where('url', $urlPlan)->first();

        if(!$plan || !$detail)
            return redirect()->back();
        
        
        return view('admin.pages.plans.details.edit',[
            'plan' => $plan,
            'detail' => $detail
        ]);
    }

    public function update(StoreUpdateDetailPlan $request, String $urlPlan, String $detailId)
    {
        $detail = $this->repository->find($detailId);
        $plan = $this->plan->where('url', $urlPlan)->first();

        if(!$plan || !$detail)
            return redirect()->back();
        
        $detail->update($request->all());

        return redirect()->route('details.plan.index', $plan->url);
    }

    public function destroy(Request $request, String $urlPlan, String $detailId)
    {
        $detail = $this->repository->find($detailId);
        $plan = $this->plan->where('url', $urlPlan)->first();

        if(!$plan || !$detail)
            return redirect()->back();
        
        $detail->destroy($detailId);

        return redirect()
        ->route('details.plan.index', $plan->url)
        ->with('message', 'Registro deletado com sucesso');

    }

}
