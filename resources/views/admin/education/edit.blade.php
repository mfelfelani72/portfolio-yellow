<div class="card">
    <div class="card-header">
        {{ __('dashboard.education-edit') }}
    </div>

    <div class="card-body">

        <form action="{{ route('education.update', $education->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.title') }}
                </label>
                <input type="text" value="{{ $education->title }}" class="form-control" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.from') }}
                </label>
                <input type="text" value="{{ $education->from }}" class="form-control" name="from">
                @error('from')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.to') }}
                </label>
                <input type="text" value="{{ $education->to }}" class="form-control" name="to">
                @error('to')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.description') }}
                </label>
                <textarea type="text" value="{{ $education->description }}" class="form-control" name="description">{{ $education->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">{{ __('dashboard.extra') }}</label>
                <input type="text" value="{{ $education->extra }}" class="form-control" name="extra">
                @error('extra')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success px-5 btn-left">
                    {{ __('dashboard.save') }}
                </button>
            </div>

        </form>

    </div>
</div>
