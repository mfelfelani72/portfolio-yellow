<div class="card">
    <div class="card-header">
        {{ __('dashboard.port-category-edit') }}
    </div>

    <div class="card-body">

        <form action="{{ route('port-category.update',$port_category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.name') }}
                </label>
                <input type="text" value="{{ $port_category->name }}" class="form-control" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.description') }}
                </label>
                <textarea type="text"  value="{{ $port_category->description }}" class="form-control" name="description">{{ $port_category->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.extra') }}
                </label>
                <input type="text" value="{{ $port_category->extra }}" class="form-control" name="extra">
                @error('extra')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.image') }}
                </label>
                <input type="file" value="{{ $port_category->image }}" class="form-control" name="image">
                <p class="pt-2"><img src={{ asset('administrator/images/' . $port_category->image) }} alt="" width="120">
                </p>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success px-5 btn-left">
                    {{ __('dashboard.save') }}
                </button>
            </div>

        </form>

    </div>
</div>