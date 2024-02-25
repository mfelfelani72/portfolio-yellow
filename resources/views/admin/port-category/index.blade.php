<div class="card">
    <div class="card-header">
        {{ __('dashboard.port-category-setting') }}
    </div>

    <div class="card-body home">
        <table id="customer">
            <tr>
                <th>{{ __('dashboard.image') }}</th>
                <th>{{ __('dashboard.name') }}</th>
                <th>{{ __('dashboard.description') }}</th>
                <th>{{ __('dashboard.extra') }}</th>
                <th>{{ __('dashboard.edit') }}</th>
                <th>{{ __('dashboard.delete') }}</th>
            </tr>

            @foreach ($port_categories as $item)
                <tr>
                    <td><img src={{ asset('administrator/images/' . $item->image) }} alt="" width="80"> </td>
                    <td> {{ $item->name }}</td>
                    <td> {{ $item->description }}</td>
                    <td> {{ $item->extra }}</td>
                    <td><a href="{{ route('port-category.edit', ['id' => $item->id]) }}" class="btn btn-primary">
                        {{ __('dashboard.edit') }}
                    </a></td>
                    <td>
                        <a href="" class="btn btn-danger" onclick="destroyUser(event,{{ $item->id }})">
                            {{ __('dashboard.delete') }}
                        </a>

                        <form action="{{ route('port-category.destroy', ['id' => $item->id]) }}"
                            id="userDelete-{{ $item->id }}" method="POST">
                            @csrf
                            @method('delete')
                        </form>


                    </td>
                </tr>
            @endforeach

        </table>
        <a href="{{ route('port-category.create') }}" class="btn btn-success px-3 mt-2">
            {{ __('dashboard.add') }}</a>

    </div>
</div>
