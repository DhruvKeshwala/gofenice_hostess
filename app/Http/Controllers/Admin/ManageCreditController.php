<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageCredit;
use App\Services\ManageCreditService;

class ManageCreditController extends Controller
{
    public function manageCredit($lang, $id = null)
    {
        $manageCredit = ManageCredit::where('id', $id)->first();
        if($manageCredit!= null || $manageCredit != '')
            return view('admin.manageCredit', compact('manageCredit'));
        else
            return view('admin.manageCredit');
    }
    public function store(Request $request)
    {
        $request->only([
            'no_of_credit',
            'euro_amount',
            'manageCreditId',
        ]);
        
        if($request)
        {
            $details['no_of_credit']            =  $request->no_of_credit;
            $details['euro_amount']             =  $request->euro_amount;
            ManageCreditService::createUpdate($details, $request->manageCreditId);
            return json_encode(['success' => 1, 'message' => 'Data Saved Successfully']);
        }
    }
}
