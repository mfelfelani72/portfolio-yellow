<div class="card">
    <div class="card-header">
        {{ __('dashboard.about-edit') }}
    </div>

    <div class="card-body">

        <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3" mt-3>
                <label for="">
                    {{ __('dashboard.name') }}
                </label>
                <input type="text" value="{{ $about->name }}" class="form-control" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.age') }}
                </label>
                <input type="text" value="{{ $about->age }}" class="form-control" name="age">
                @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.language') }}
                </label>
                <input type="text" value="{{ $about->language }}" class="form-control" name="language">
                @error('language')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">{{ __('dashboard.specialtie') }}</label>
                <input type="text" value="{{ $about->specialtie }}" class="form-control" name="specialtie">
                @error('specialtie')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.exprience') }}
                </label>
                <input type="text" value="{{ $about->exprience }}" class="form-control" name="exprience">
                @error('exprience')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.project-completed') }}
                </label>
                <input type="text" value="{{ $about->proj_completed }}" class="form-control" name="proj_completed">
                @error('proj_completed')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.happy-client') }}
                </label>
                <input type="text" value="{{ $about->hap_client }}" class="form-control" name="hap_client">
                @error('hap_client')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.award-won') }}
                </label>
                <input type="text" value="{{ $about->award_won }}" class="form-control" name="award_won">
                @error('award_won')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group mt-3">
                <label for="">
                    {{ __('dashboard.cv') }}
                </label>
                <input type="file" class="form-control" name="cv">
                <p class="pt-2"><a href="{{ asset('administrator/files/' . $about->cv) }}">
                {{ $about->cv }}</a>
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
