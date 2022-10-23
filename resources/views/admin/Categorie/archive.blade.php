@extends('admin.layouts.master')
@section('title')
    Archive Category
@endsection

@section('page_name')
    Archive Category
@endsection

@section('main_page')
    Category
@endsection

@section('sub_page')
@endsection

@section('content')
    <div class="col-12"></div>
    <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Archive Category Table</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>deleted at</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if ($category->active == 1)
                                    {{ 'active' }}
                                @else
                                    {{ 'Not active' }}
                                @endif
                            </td>
                            <td>{{ $category->deleted_at }}</td>
                            <td>
                                <a href="{{route('categorie.restore',$category->id)}}" class="btn btn-outline-info">Restore</a>
                            </td>
                            <td>
                                <a href="{{route('categorie.force',$category->id)}}" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Category Added</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

    </div>
@endsection
