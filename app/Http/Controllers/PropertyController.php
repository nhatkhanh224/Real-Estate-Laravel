<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\ConditionProperty;
use App\Models\LocationProperty;
use App\Models\ContactProperty;

class PropertyController extends Controller
{
    private $property;
    public function __construct(Property $property)
    {
        $this->property = $property;
    }
    public function index(){
        $properties=$this->property->latest()->paginate(10);
        return view('admin.property.list',compact('properties'));
    }
    public function detail($id){
        $property=$this->property->find($id);
        $conditions=ConditionProperty::where('properties_id',$id)->first();
        $locations=LocationProperty::where('properties_id',$id)->first();
        $contacts=ContactProperty::where('properties_id',$id)->first();
        return view('admin.property.detail',compact('property','conditions','locations','contacts'));
    }
}
