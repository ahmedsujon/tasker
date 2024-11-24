<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Freelancer Index</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/app/images/header/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/app/plugins/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/app/plugins/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/app/sass/style.css') }}" />
</head>

<body>
    <main class="main_content_area">
        {{ $slot }}
    </main>

    <!-- Desktop or tablet device  -->
    <section class="desktop_content_area">
        <h3>You are viewing this app on a tablet or desktop.</h3>
        <h4>This app is optimized for mobile devices.</h4>
    </section>

    <!-- JS Here -->
    <script src="{{ asset('assets/app/plugins/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/app/plugins/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/app/plugins/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/app/js/auth.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
    <script src="{{ asset('assets/admin/js/custom-toast.js') }}"></script>
    <script src="{{ asset('assets/app/js/main.js') }}"></script>

    @stack('scripts')
    <script>
        window.addEventListener('success', event => {
            successMsg(event.detail[0].message);
        });
        window.addEventListener('warning', event => {
            warningMsg(event.detail[0].message);
        });
        window.addEventListener('error', event => {
            errorMsg(event.detail[0].message);
        });
        window.addEventListener('info', event => {
            infoMsg(event.detail.message);
        });
        @if (Session::has('success'))
            successMsg("{{ Session::get('success') }}");
        @endif
        @if (Session::has('error'))
            errorMsg("{{ Session::get('error') }}");
        @endif
        @if (Session::has('info'))
            infoMsg("{{ Session::get('info') }}");
        @endif
        @if (Session::has('warning'))
            warningMsg("{{ Session::get('warning') }}");
        @endif

        //login
        @if (Session::has('login_success'))
            successMsg("{{ Session::get('login_success') }}");
            '<?php echo session()->forget('login_success'); ?>'
        @endif

        //Delete conf.
        window.addEventListener('show_delete_confirmation', event => {
            $('#deleteDataModal').modal('show');
        });
        window.addEventListener('action_btn_click_error', event => {
            $('.delete_btn').html('<i class="bx bx-trash font-size-13 align-middle"></i>');
            $('#deleteDataModal').modal('hide');
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: 'Something went wrong! <br> Please try again.'
            });
        });
    </script>
</body>

</html>
