<div class="card">
    <div class="card-header">
        {{ __('dashboard.home-edit') }}
    </div>

    <div class="card-body">

        <form action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.name') }}
                </label>
                <input type="text" value="{{ $home->name }}" class="form-control" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.family-name') }}
                </label>
                <input type="text" value="{{ $home->last_name }}" class="form-control" name="last_name">
                @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.nick-name') }}
                </label>
                <input type="text" value="{{ $home->nick_name }}" class="form-control" name="nick_name">
                @error('nick_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">{{ __('dashboard.job') }}</label>
                <input type="text" value="{{ $home->job }}" class="form-control" name="job">
                @error('job')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.degree-e') }}
                </label>
                <input type="text" value="{{ $home->deg_education }}" class="form-control" name="deg_education">
                @error('deg_education')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.description') }}
                </label>
                <textarea type="text" value="{{ $home->description }}" class="form-control" name="description">{{ $home->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.image') }}
                </label>
                <input type="file" class="form-control" name="image">
                <p class="pt-2"><img src={{ asset('administrator/images/' . $home->image) }} alt="" width="120">
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