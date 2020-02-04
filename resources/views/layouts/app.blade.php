<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="{{asset('FrontEnd')}}/jquery.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/jquery-ui.min.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/tt_slideshow.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/customjs.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/contactform.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Meta Description" />
    <title>
        {{$title}}
    </title>
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/bootstrap.css" type="text/css" media="screen"/>
    <link rel="stylesheet"  href="{{asset('FrontEnd')}}/style.css" type="text/css" media="screen"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
    <link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
    <![endif]-->
    <script type="text/javascript" src="{{asset('FrontEnd')}}/totop.js">
    </script>
    <!--[if IE 7]>
    <style type="text/css" media="screen">
        #ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/html5shiv.js">
    </script>
    <script type="text/javascript" src="{{asset('FrontEnd')}}/respond.min.js">
    </script>
    <![endif]-->
</head>
<body class="{{$bodyClass}}">
    @include('inc.totop')

    @include('inc.header')

    @include('inc.nav')

    @yield('content')

    @include('inc.footer')

</body>
</html>
