<div class="card">
    <div class="card-header">
        {{ __('dashboard.education-setting') }}
    </div>

    <div class="card-body home">
        <table id="customer">
            <tr>
                <th>{{ __('dashboard.title') }}</th>
                <th>{{ __('dashboard.from') }}</th>
                <th>{{ __('dashboard.to') }}</th>
                <th>{{ __('dashboard.description') }}</th>
                <th>{{ __('dashboard.extra') }}</th>
                <th>{{ __('dashboard.edit') }}</th>
                <th>{{ __('dashboard.delete') }}</th>
            </tr>

            @foreach ($education as $item)
                <tr>
                    <td> {{ $item->title }}</td>
                    <td> {{ $item->from }}</td>
                    <td> {{ $item->to }}</td>
                    <td> {{ $item->description }}</td>
                    <td> {{ $item->extra }}</td>
                    <td><a href="{{ route('education.edit', ['id' => $item->id]) }}" class="btn btn-primary">
                            {{ __('dashboard.edit') }}
                        </a></td>

                    <td>
                        <a href="" class="btn btn-danger" onclick="destroyUser(event,{{ $item->id }})">
                            {{ __('dashboard.delete') }}
                        </a>

                        <form action="{{ route('education.destroy', ['id' => $item->id]) }}"
                            id="userDelete-{{ $item->id }}" method="POST">
                            @csrf
                            @method('delete')
                        </form>


                    </td>
                </tr>
            @endforeach

        </table>


        <a href="{{ route('education.create') }}" class="btn btn-success px-3 mt-2">
            {{ __('dashboard.add') }}</a>


    </div>
</div>
