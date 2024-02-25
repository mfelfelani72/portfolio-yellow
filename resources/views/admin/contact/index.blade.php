<div class="card">
    <div class="card-header">
        {{ __('dashboard.contact-setting') }}
    </div>

    <div class="card-body home">
        <table id="customer">
            <tr>
                <th>{{ __('dashboard.name') }}</th>
                <th>{{ __('dashboard.email') }}</th>
                <th>{{ __('dashboard.subject') }}</th>
                <th>{{ __('dashboard.description') }}</th>
                <th>{{ __('dashboard.delete') }}</th>
            </tr>

            @foreach ($contacts as $item)
                <tr>
                    <td> {{ $item->name }}</td>
                    <td> {{ $item->email }}</td>
                    <td> {{ $item->subject }}</td>
                    <td> {{ $item->description }}</td>
                    <td>
                        <a href="" class="btn btn-danger" onclick="destroyUser(event,{{ $item->id }})">
                            {{ __('dashboard.delete') }}
                        </a>

                        <form action="{{ route('contact.destroy', ['id' => $item->id]) }}"
                            id="userDelete-{{ $item->id }}" method="POST">
                            @csrf
                            @method('delete')
                        </form>


                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</div>
