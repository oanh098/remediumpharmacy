<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

{{--    jquery to active carousel and header slider --}}

    <script type="text/javascript" src="{{asset('FrontEnd')}}/jquery.js">
    </script>

{{--    End jquery to active carousel and header slider --}}

{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/jquery-ui.min.js">--}}
{{--    </script>--}}
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/tt_slideshow.js">--}}
{{--    </script>--}}
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/bootstrap.min.js">--}}
{{--//     </script>--}}
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/customjs.js">--}}
{{--    </script>--}}
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/contactform.js">--}}
{{--    </script>--}}

    <meta name="description" content="Meta Description" />
    <meta charset="utf-8">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>
        {{$title}}
    </title>


{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

{{--    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/bootstrap.css" type="text/css" media="screen"/>--}}
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/style_new.css" type="text/css" media="screen"/>
    <!--[if lte IE 8]>-->
<!--    <link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>-->
<!--    <link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>-->
    <!--<![endif]-->
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/totop.js">--}}
{{--    </script>--}}
    <!--[if IE 7]>-->
<!--    <style type="text/css" media="screen">-->
<!--        #ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}-->
<!--   </style>-->
    <!--<![endif]-->
    <!--[if lt IE 9]>-->
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/html5shiv.js">--}}
{{--    </script>--}}
{{--    <script type="text/javascript" src="{{asset('FrontEnd')}}/respond.min.js">--}}
<!--    </script>-->
    <!--<![endif]-->
</head>
<body class="{{$bodyClass}}">
{{--    @include('inc.totop')--}}

    @include('inc.header')

    @include('inc.nav')

    @yield('content')

    @include('inc.footer')

</body>
</html>
