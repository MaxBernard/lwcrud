<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use App\Models\Category as Categories;
use App\Http\Resources\CategoryResource;
use App\Http\Livewire\CategoryPagination;

class Category extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  public $categories, $name, $description, $category_id;
  public $updateCategory = false;

  protected $listeners = ['deleteCategory'=>'destroy' ];

  // Validation Rules
  protected $rules = [
    'name'=>'required',
    'description'=>'required'
  ];
    
  public function render()
  {
    $this->categories = Categories::select('id','name','description')->get();
    // $this->categories = CategoryResource::collection(Category::all());
    // dump($this->categories);
    return view('livewire.category', ['categories' => $this->categories]);
    // return view('livewire.category-pagination', [
    //   'categories' => Category::paginate(5),
    // ]);
  }
    
  public function resetFields(){
    $this->name = '';
    $this->description = '';
  }
    
  public function store(){
    // Validate Form Request
    $this->validate();
    try{
      // Create Category
      Categories::create([
        'name'=>$this->name,
        'description'=>$this->description
      ]);
      // Set Flash Message
      session()->flash('success','Category Created Successfully!!');
      // Reset Form Fields After Creating Category
      $this->resetFields();
    } catch(\Exception $e){
      // Set Flash Message
      session()->flash('error','Something goes wrong while creating category!!');
      // Reset Form Fields After Creating Category
      $this->resetFields();
    }
  }

    public function edit($id){
        $category = Categories::findOrFail($id);
        $this->name = $category->name;
        $this->description = $category->description;
        $this->category_id = $category->id;
        $this->updateCategory = true;
    }
    public function cancel()
    {
        $this->updateCategory = false;
        $this->resetFields();
    }
    public function update(){
        // Validate request
        $this->validate();
        try{
            // Update category
            Categories::find($this->category_id)->fill([
                'name'=>$this->name,
                'description'=>$this->description
            ])->save();
            session()->flash('success','Category Updated Successfully!!');
    
            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating category!!');
            $this->cancel();
        }
    }
    public function destroy($id){
        try{
            Categories::find($id)->delete();
            session()->flash('success',"Category Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting category!!");
        }
    }
}