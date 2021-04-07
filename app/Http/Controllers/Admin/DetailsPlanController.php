<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailPlan;
use App\Models\Plan;
use Illuminate\Http\Request;

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

    public function create()
    {
        /* 
            !! preciso pegar os dados do plano pra enviar para view create
            pra saber 'o detalhe de qual plano' que vai ser criado.
        */
        return view('admin.pages.plans.details.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
