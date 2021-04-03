@extends('eshopper.layouts.master')

@section('scripts')
    <script src="/eshopper/js/jquery.js"></script>
    <script src="/eshopper/js/bootstrap.min.js"></script>
    <script src="/eshopper/js/jquery.scrollUp.min.js"></script>
    <script src="/eshopper/js/price-range.js"></script>
    <script src="/eshopper/js/jquery.prettyPhoto.js"></script>
    <script src="/eshopper/js/main.js"></script>
@endsection

@section('stylesheets')
    <link href="/eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="/eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="/eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="/eshopper/css/price-range.css" rel="stylesheet">
    <link href="/eshopper/css/animate.css" rel="stylesheet">
    <link href="/eshopper/css/main.css" rel="stylesheet">
    <link href="/eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
            <script src="/eshopper/js/html5shiv.js"></script>
            <script src="/eshopper/js/respond.min.js"></script>
            <![endif]-->
    <link rel="shortcut icon" href="/eshopper/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="/eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="/eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/eshopper/images/ico/apple-touch-icon-57-precomposed.png">
@endsection

@section('container')
    @include('eshopper.inc.features_items')

    @include('eshopper.inc.category-tab')

    @include('eshopper.inc.recommended_items')
@endsection
