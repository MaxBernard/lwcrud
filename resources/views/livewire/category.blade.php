<div>
  <div class="col-md-8 mb-2 mx-auto">
    <div class="card">
      <div class="card-body">
        @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
          </div>
        @endif
        @if(session()->has('error'))
          <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
          </div>
        @endif
        @if($updateCategory)
          @include('livewire.update')
        @else
          @include('livewire.create')
        @endif
      </div>
    </div>
  </div>
  <div class="col-md-8 mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th class="text-center" style="width: 140px;">Action</th>
              </tr>
            </thead>
            <tbody>
              @if (count($categories) > 0)
                @foreach ($categories as $category)
                  <tr>
                    <td>
                      {{$category->name}}
                    </td>
                    <td>
                      {{$category->description}}
                    </td>
                    <td align="center">
                      <button class="btn btn-sm btn-info"><i class="fa fa-eye ml-1"></i></button>
                      <button wire:click="edit({{$category->id}})" class="btn btn-primary btn-sm"><i class="fa fa-edit ml-1"></i></button>
                      <button onclick="deleteCategory({{$category->id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash ml-1"></i></button>
                    </td>
                  </tr>
                @endforeach
                {{-- {{ $categories->links() }} --}}
              @else
                <tr>
                  <td colspan="3" align="center">
                    No Categories Found.
                  </td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    function deleteCategory(id){
      if(confirm("Are you sure to delete this record?"))
        window.livewire.emit('deleteCategory',id);
    }
  </script>
</div>