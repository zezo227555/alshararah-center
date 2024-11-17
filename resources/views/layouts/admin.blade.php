<!DOCTYPE html>
<html lang="en">

@include('includes.heade')

<body class="index-page">
    @include('includes.admin.header')

    @session('success')
        <div class="container text-center mt-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ session('success') }}</span>
                <button type="button" class="btn-close float-start" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endsession

    @yield('content')

    @yield('modals')

    @include('includes.foot')

</body>

</html>
