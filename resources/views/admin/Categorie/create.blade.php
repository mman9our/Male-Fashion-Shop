@extends('admin.layouts.master')
@section('title')
    All Category
@endsection

@section('page_name')
    Add New Category
@endsection

@section('main_page')
    Category
@endsection

@section('sub_page')
    All
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New Category</h3>
        </div>

        @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger mt-2">
                {{$error}}

            </div>
            @endforeach
        @endif

        <form method="post" action="{{ route('categorie.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter Category Name">
                </div>
                <div class="col-sm-6">

                    <label for="exampleInputEmail1">Status</label>

                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline ml-3">
                            <input type="radio" id="radioPrimary1" name="active" value="1" checked="">
                            <label for="radioPrimary1">
                                Active
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="active" value="0">
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
