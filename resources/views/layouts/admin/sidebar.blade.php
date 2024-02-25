<div class="card">
    <div class="card-header">
        {{ __('dashboard.Setting') }}
    </div>
    <div class="card-body">
        <ul>
            <li>
                <a href="{{ url('admin', ['content' => 'dashboard']) }}">
                    {{ __('dashboard.Dashboard') }}
                </a>
            </li>

            <li>
                <a href="{{ url('admin', ['content' => 'home']) }}">
                    {{ __('dashboard.Home') }}
                </a>
            </li>
            <li>
                <a href="{{ url('admin', ['content' => 'about']) }}">
                    {{ __('dashboard.about') }}
                </a>
            </li>
            <li>
                <a href="{{ url('admin', ['content' => 'education']) }}">
                    {{ __('dashboard.education') }}
                </a>
            </li>
            <li>
                <a href="{{ url('admin', ['content' => 'port-category']) }}">
                    {{ __('dashboard.port-category') }}
                </a>
            </li>
            <li>
                <a href="{{ url('admin', ['content' => 'contact']) }}">
                    {{ __('dashboard.contact') }}
                </a>
            </li>

        </ul>
    </div>
</div>
