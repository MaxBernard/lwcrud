<div>
  <table class="table-auto" style="width: 100%;">
    <thead>
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Description</th>
        <th class="text-center" style="width: 100px;">
          <a href="#" id="addNewBook" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#addModal">
            <i class="fa fa-plus"></i>New
          </a>
        </th>
      </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
      <tr>
        <td class="border px-4 py-2">{{ $category->id }}</td>
        <td class="border px-4 py-2">{{ $category->name }}</td>
        <td class="border px-4 py-2">{{ $category->description }}</td>
        <td align="center">
          <button class="btn btn-info btn-sm"><i class="fa fa-eye ml-1"></i></button>
          <button wire:click="edit({{$category->id}})" class="btn btn-primary btn-sm"><i class="fa fa-edit ml-1"></i></button>
          <button onclick="deleteCategory({{$category->id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash ml-1"></i></button>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  
    {{ $categories->links() }}
</div>
