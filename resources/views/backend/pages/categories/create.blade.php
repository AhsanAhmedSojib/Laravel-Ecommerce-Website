@extends('backend.layouts.master')

@section('title')
    Create
@endsection

@section('content')
    
<div class="main-panel">
  <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Add Category
            </div>
            <div class="card-body">
                <form action="{{ route('admin.category.store' )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('backend.partials.messages')
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Parent Category</label>
                      <select name="parent_id" class="form-control">
                        @foreach ($main_categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Category Image</label>

                            <input type="file" class="form-control" name="image" id="image" >
                    </div>
                                



                    <button type="submit" class="btn btn-primary">Add Category</button>
                  </form>
        </div>
    </div>
</div>
<!-- main-panel ends -->
@endsection




