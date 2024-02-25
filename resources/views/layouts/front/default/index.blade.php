<!DOCTYPE html>
<html lang="en">

<head>
    {{-- head and links start --}}

    @include('front.HE-elements.head')

    {{-- head and links end --}}

</head>

<body>

    {{-- Elements start --}}

    @yield('content')

    {{-- Elements end --}}


    {{-- scripts and arrow up button start --}}

    @include('front.HE-elements.end')

    {{-- scripts and arrow up button end --}}

</body>

</html>
