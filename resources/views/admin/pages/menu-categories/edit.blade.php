@extends('admin.admin-dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h4>Edit Menu Category</h4>

        <form action="{{ route('menu-categories.update', $menuCategory->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="menu-category" class="form-label">Menu Category</label>
                <input type="text" class="form-control" id="menu-category" name="name" value="{{ $menuCategory->name }}" placeholder="Menu Name">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($menuCategory->image)
                    <img src="{{ asset('storage/' . $menuCategory->image) }}" alt="{{ $menuCategory->name }}" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
