<div class="card">
    <div class="card-header">
    {{ __('dashboard.home-setting') }}
    </div>

    <div class="card-body home">
        <table id="customer">
            <tr>
                <th>{{ __('dashboard.name') }}</th>
                <th>{{ __('dashboard.age') }}</th>
                <th>{{ __('dashboard.language') }}</th>
                <th>{{ __('dashboard.specialtie') }}</th>
                <th>{{ __('dashboard.exprience') }}</th>
                <th>{{ __('dashboard.project-completed') }}</th>
                <th>{{ __('dashboard.happy-client') }}</th>
                <th>{{ __('dashboard.award-won') }}</th>
                <th>{{ __('dashboard.cv') }}</th>
                <th>{{ __('dashboard.edit') }}</th>
            </tr>

            @foreach ($about as $item)
                <tr>
                    <td> {{ $item->name }}</td>
                    <td> {{ $item->age }}</td>
                    <td> {{ $item->language }}</td>
                    <td> {{ $item->specialtie }}</td>
                    <td> {{ $item->exprience }}</td>
                    <td> {{ $item->proj_completed }}</td>
                    <td> {{ $item->hap_client }}</td>
                    <td> {{ $item->award_won }}</td>
                    <td> <a href="{{ asset('administrator/files/' . $item->cv) }}">{{ $item->cv }}</a></td>

                    <td><a href="{{ route('about.edit', ['id' => $item->id]) }}" class="btn btn-primary">
                        {{ __('dashboard.edit') }}
                    </a></td>
                    @if (false)
                        <td>
                            <a href="" class="btn btn-danger"
                                onclick="destroyUser(event,{{ $item->id }})">حذف</a>

                            <form action="{{ route('home.destroy', ['id' => $item->id]) }}"
                                id="userDelete-{{ $item->id }}" method="POST">
                                @csrf
                                @method('delete')
                            </form>


                        </td>
                    @endif


                </tr>
            @endforeach

        </table>

        @if (false)
            <a href="{{ route('home.create') }}" class="btn btn-success px-3 mt-2">تنظیم بخش خانه</a>
        @endif

    </div>
</div>
