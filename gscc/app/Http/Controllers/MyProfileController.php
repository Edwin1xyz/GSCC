<?php

namespace App\Http\Controllers;

use App\Model\ChildInformation;
use App\Model\EducationalQualification;
use App\Model\ProfessionalQualification;
use App\Model\BlwFellowshipInvolvementDetail;
use App\Model\SpousalInformation;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BlwFellowshipInvolvementDetail(BlwFellowshipInvolvementDetail $blwfind ){
        // The blwfind means blw_fellowship Involvement details
        return view('myprofile.blw_find', compact('blwfind', $blwfind));
    }


    public function addEducationalQualification(Request $request){
        EducationalQualification::create($request->all());
        return view('EducationalQualification.create_eq');
    }


    public function addProfessionalQualification(Request $request){
        ProfessionalQualification::create($request->all());
        return view('EducationalQualification.create_ep');
    }


    public function addSpousalInfo(Request $request){
        SpousalInformation::create($request->all());
        return view('FamilyInformation.addSpousalInfo');
    }


    public function addChildInfo(Request $request){
        ChildInformation::create($request->all());
        return view('FamilyInformation.addChildInfo');
    }


    public function viewChildrenInfo(ChildInformation $childInformation){
        return view('FamilyInformation.viewChildrenInfo');
    }





}



