@extends('admin.layouts.master')
@section('title')
    All Category
@endsection

@section('page_name')
    Edit Category
@endsection

@section('main_page')
    Category
@endsection

@section('sub_page')
    Edit
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Category</h3>
        </div>

        <form method="post" action="{{ route('categorie.update', $category->id) }}">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input value="{{$category->name}}" type="text" name="name" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Category Name" >
                </div>
                <div class="col-sm-6">

                    <label for="exampleInputEmail1">Status</label>

                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline ml-3">
                            <input type="radio" id="radioPrimary1" name="active" value="1" {{($category->active==1)?"checked":""}}>
                            <label for="radioPrimary1">
                                Active
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="active" value="0" {{($category->active==0)?"checked":""}}>
                            <label for="radioPrimary2">
                                Not Active
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
