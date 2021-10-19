<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\ConditionProperty;
use App\Models\LocationProperty;
use App\Models\ContactProperty;
use App\Components\Recursive;

class PropertyController extends Controller
{
    private $property;
    public function __construct(Property $property,Category $category)
    {
        $this->property = $property;
        $this->category = $category;
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
    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recursive($data);
        $htmlOption = $recusive->categoryRecursive($parentId);
        return $htmlOption;
    }
    public function edit($id){
        $htmlOption=$this->getCategory($parentId='');
        $property= $this->property->find($id);
        return view('admin.property.edit',compact('htmlOption','property'));
    }
    public function delete($id){
        $this->property->find($id)->delete();
        return redirect()->route('properties.index');
    }
}
