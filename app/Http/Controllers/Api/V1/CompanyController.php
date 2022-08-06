<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Api\V1\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'companies' => Company::all()
        ]);
    }

    public function store(Request $request)
    {
        $company = new Company;

        $company->name = $request->name;
        $company->code = $request->code;
        $company->is_active = $request->is_active;
        $company->description = $request->description;
        $company->save();

        return response()->json([
            'company' => $company
        ]);
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->name = $request->name;
        $company->code = $request->code;
        $company->is_active = $request->is_active;
        $company->description = $request->description;
        $company->save();

        return response()->json([
            'company' => $company
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
