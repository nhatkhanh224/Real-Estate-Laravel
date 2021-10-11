<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Property;
use App\Models\ConditionProperty;
use App\Models\ContactProperty;
use App\Traits\StorageImageTrait;
use App\Components\Recursive;
use DB;

class HomePageController extends Controller
{
    use StorageImageTrait;
    private $category;
    private $product;
    private $condition;
    private $contact;
    
    public function __construct(Category $category,Property $property,ContactProperty $contact,ConditionProperty $condition)
    {
        $this->category = $category;
        $this->property = $property;
        $this->contact = $contact;
        $this->condition = $condition;
    }
    public function submitPropertyPage(){
        $htmlOption=$this->getCategory($parentId='');
        return view('web.submit-property',compact('htmlOption'));
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
                'address' => $request->address,
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
     
}