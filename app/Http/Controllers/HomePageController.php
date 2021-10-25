<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Property;
use App\Models\ConditionProperty;
use App\Models\ContactProperty;
use App\Models\Province;
use App\Models\District;
use App\Models\ImageProperty;
use App\Models\LocationProperty;
use App\Traits\StorageImageTrait;
use App\Components\Recursive;
use DB;
use Illuminate\Support\Facades\Log;

class HomePageController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    private $condition;
    private $contact;
    
    public function __construct(Category $category,Property $property,ContactProperty $contact,ConditionProperty $condition,LocationProperty $location)
    {
        $this->category = $category;
        $this->property = $property;
        $this->contact = $contact;
        $this->condition = $condition;
        $this->location = $location;
    }
    public function index(){
        $properties=$this->property->latest()->paginate(8);
        return view('web.homepage',compact('properties'));
    }
    public function submitPropertyPage(){
        $htmlOption=$this->getCategory($parentId='');
        $province=Province::get();
        return view('web.submit-property',compact('htmlOption','province'));
    }
    public function getDistrict(Request $request){
        $data['districts'] = District::where("_province_id",$request->province_id)->get(["_name","id"]);
        return response()->json($data);
    }
    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recursive($data);
        $htmlOption = $recusive->categoryRecursive($parentId);
        return $htmlOption;
    }
   
    public function submitProperty(Request $request){
        try {
            DB::beginTransaction();
            $dataPropertyCreate = [
                'title' => $request->title,
                'price' => $request->price,
                'area' => $request->area,
                'discription' => $request->discription,
                'category_id' => $request->category_id
            ];
            
            $property = $this->property->create($dataPropertyCreate);
            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $fileItem) {
                    $dataPropertyImageDetail = $this->storageTraitUploadMutiple($fileItem, 'property');
                    $property->images()->create([
                        'image_path' => $dataPropertyImageDetail['file_path'],
                        'image_name' => $dataPropertyImageDetail['file_name']
                    ]);
                }
            }
            $dataPropertyLocations =[
                'district_id'=>$request->district_id,
                'province_id'=>$request->province_id,
                'address' => $request->address,
                'properties_id' =>$property->id,
            ];
            $location=$this->location->create($dataPropertyLocations);
            $dataPropertyConditions = [
                'number_of_floors'=>$request->number_of_floors,
                'number_of_bedrooms'=>$request->number_of_bedrooms,
                'number_of_bathrooms'=>$request->number_of_bathrooms,
                'building_age' => $request->building_age,
                'direction'=>$request->direction,
                'properties_id' =>$property->id,
            ];
            $condition=$this->condition->create($dataPropertyConditions);
            $dataPropertyContacts = [
               'name'=>$request->name,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'properties_id' =>$property->id,
            ];
            $contact=$this->contact->create($dataPropertyContacts);
            DB::commit();
            return redirect()->route('homepage.submitPropertyPage');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
        }
       
    }
    public function properties_details($id){
        $property= $this->property->find($id);
        $conditions=ConditionProperty::where('properties_id',$id)->first();
        $locations=LocationProperty::where('properties_id',$id)->first();
        $contacts=ContactProperty::where('properties_id',$id)->first();
        $properties= $this->property->latest()->paginate(2);
        return view('web.properties_detail',compact('property','conditions','locations','contacts','properties'));
    }
     
}