<div class="card">
    <div class="card-header">
        {{ __('dashboard.port-category-edit') }}
    </div>

    <div class="card-body">

        <form action="{{ route('port-category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.name') }}
                </label>
                <input type="text" class="form-control" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.description') }}
                </label>
                <textarea type="text" class="form-control" name="description"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.extra') }}
                </label>
                <input type="text" class="form-control" name="extra">
                @error('extra')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.image') }}
                </label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success px-5 btn-left">
                    {{ __('dashboard.save') }}
                </button>
            </div>

        </form>

    </div>
</div>