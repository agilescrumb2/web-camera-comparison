<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Cameris</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/Logo Kamera Comparison.png') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <style>
        .header-logo {
            display: flex;
            align-items: center;
        }

        .header-logo a {
            display: block;
            width: 50px;
            /* sesuaikan ukuran logo dengan kebutuhan Anda */
            height: auto;
        }

        .header-logo img {
            max-width: 100%;
            height: auto;
        }

        .slider-images {
            max-width: 100%;
            /* Lebar maksimum sesuai dengan kontainer */
            height: auto;
            /* Tinggi disesuaikan dengan rasio aspek gambar */
        }

        @media (max-width: 414px) {

            /* Untuk iPhone XR dengan lebar layar maksimal 414px */
            .slider-images {
                max-width: 300px;
                /* Lebar maksimum diatur ke 300px */
            }
        }
    </style>
</head>

<body>
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
    @section('js')
        <script src="{{ asset('assets2/js/vendor/modernizr-3.11.2.min.js') }}"></script>
        <script src="{{ asset('assets2/js/vendor/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/ajax-contact.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/appear.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/odometer.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/select2.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets2/js/plugins/jquery.zoom.min.js') }}"></script>
        <script src="{{ asset('assets2/js/main.js') }}"></script>
        @yield('script')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- <script>
            function sortCameras(sortBy) {
                let url = "{{ route('cameras.index') }}";

                if (sortBy === 'price_low_to_high') {
                    url += "?sort=price_low_to_high";
                } else if (sortBy === 'price_high_to_low') {
                    url += "?sort=price_high_to_low";
                } else {
                    url += "?sort=default";
                }

                window.location.href = url;
            }
        </script> --}}
        {{-- <script>
            $(document).ready(function() {
                $('.compare-remove-form').on('submit', function(e) {
                    e.preventDefault();

                    var form = $(this);
                    var url = form.attr('action');
                    var csrfToken = form.find('input[name="_token"]').val();
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            _token: csrfToken
                        },
                        success: function(response) {
                            // Tindakan setelah penghapusan berhasil dilakukan
                        },
                        error: function(xhr) {
                            // Tindakan jika terjadi kesalahan saat penghapusan
                        }
                    });
                });
            });
        </script> --}}
    </body>

    </html>
