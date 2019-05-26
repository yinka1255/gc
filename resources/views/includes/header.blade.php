<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the Keyword -->
	<meta name="keywords" content="blog, clean, clear, creative, design web, ecommerce, flat, Indoor Furniture, marketing, portfolio, vineyard, wines, wines WordPress theme, winewinery">
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Philosopher:400,700%7CPinyon+Script" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('public/css/font-awesome.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('public/css/plugins.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('public/css/icofont.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('public/style.css')}}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
	<!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('public/css/colors.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    
    <meta name="google-site-verification" content="gLG6meoaI5A-6u3j7YGZugDStbVXXWP6HMlmndgIk00" />
    
    <script src="{{asset('public/admin/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script>
        function getSuccess(data){
            $.confirm({
                    title: 'Success',
                    content: data,
                    typeAnimated: true,
                    buttons: {
                        'Continue shopping': function () {
                            text: 'Contnue shopping'
                            
                        },
                        'Checkout': function () {
                            window.location.href = "{{url('cart')}}";
                        },
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