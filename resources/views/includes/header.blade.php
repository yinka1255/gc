<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="{{asset('public/img/favicon.ico')}}">

    <!-- CSS Global -->
    <link href="{{asset('public/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/owl-carousel2/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/owl-carousel2/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/plugins/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('public/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/theme-green-1.css')}}" rel="stylesheet" id="theme-config-link">

    <!-- Head Libs -->
    <script src="{{asset('public/plugins/modernizr.custom.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    
    
    <script src="{{asset('public/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        function getSuccess(data){
            $.confirm({
                    title: 'Success',
                    content: data,
                    typeAnimated: true,
                    // buttons: {
                    //     'Continue shopping': function () {
                    //         text: 'Contnue shopping'
                            
                    //     },
                    //     'Checkout': function () {
                    //         window.location.href = "{{url('cart')}}";
                    //     },
                    // }
                    buttons: {
                            Ok: function () {
                            }
                    }
                });
        }

    function getError(data){
            $.confirm({
                    title: 'Error!',
                    content: data,
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                            Ok: function () {
                            }
                    }
            });
        }
    </script>
    
    @if(Session::has('error'))
    <script>
        getError("{{Session::get('error')}}");
    </script>
    @endif	
    @if(Session::has('success'))
    <script>
        getSuccess("{{Session::get('success')}}");
    </script>
    @endif	
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->