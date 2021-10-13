<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

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
}
