<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    @include('include.stlye')
</head>

<body>
    @include('include.navbar')
    @include('include.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->

                @yield('content')

                <!-- /.row (main row) -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('include.footer')
    @include('include.script')
    @stack('addom-script')

    <script>
        $(document).ready(function () {

            // Drofify


            // $('.dropify').dropify()

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            $('.error').show(function () {
                var message = $(this).data('message')
                Swal.fire(
                    'Perhatian',
                    message,
                    'error'
                )
            })

            $('.success').show(function () {
                var message = $(this).data('message')
                toastr.success(message, 'Perhatian')
            })

            $('.delete').click(function () {
                var label = $(this).data('label');
                var url = $(this).data('url');
                Swal.fire({
                    title: 'Perhatian',
                    text: "Apakah yakin menghapus data " + label + " ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).data("id");
                        var token = $("meta[name='csrf-token']").attr("content");
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                "id": id,
                                "_token": token,
                            },
                            success: function (data) {
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                )
                                window.location.reload().time(3)
                            }
                        });
                    }
                })
            })


        });

    </script>
</body>

</html>
