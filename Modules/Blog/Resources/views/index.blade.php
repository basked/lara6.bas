@extends('blog::layouts.master')
@section('dev_styles')
    <link rel="stylesheet" href="{{ mix('css/blog.css') }}">
@endsection

@section('content')
    <div class="dx-viewport">
        <div id="app">
            <span v-if="false" style="background-color: #363640;color:#ffe817;width: 100%">Loading...   </span>
            {{--Меню--}}
            <blog-menu></blog-menu>
            {{--ToolBar--}}
            {{--<blog-tool-bar></blog-tool-bar>--}}
        </div>
    </div>
@endsection

