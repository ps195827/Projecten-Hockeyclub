@extends('template_backend_admin.home')
@section('sub-title','Edit Category')
@section('content')


    @if(count($errors)>0)
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
        @endforeach
    @endif

<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Edit Category">
    </div>
</form>


@endsection