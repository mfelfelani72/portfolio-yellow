<div class="card">
    <div class="card-header">
    {{ __('dashboard.home-setting') }}
    </div>

    <div class="card-body home">
        <table id="customer">
            <tr>
                <th>{{ __('dashboard.image') }}</th>
                <th>{{ __('dashboard.name') }}</th>
                <th>{{ __('dashboard.family-name') }}</th>
                <th>{{ __('dashboard.nick-name') }}</th>
                <th>{{ __('dashboard.job') }}</th>
                <th>{{ __('dashboard.degree-e') }}</th>
                <th>{{ __('dashboard.description') }}</th>
                <th>{{ __('dashboard.edit') }}</th>
            </tr>

            @foreach ($homes as $item)
                <tr>
                    <td><img src={{ asset('administrator/images/' . $item->image) }} alt="" width="80"> </td>
                    <td> {{ $item->name }}</td>
                    <td> {{ $item->last_name }}</td>
                    <td> {{ $item->nick_name }}</td>
                    <td> {{ $item->job }}</td>
                    <td> {{ $item->deg_education }}</td>
                    <td> {{ $item->description }}</td>

                    <td><a href="{{ route('home.edit', ['id' => $item->id]) }}" class="btn btn-primary">
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
