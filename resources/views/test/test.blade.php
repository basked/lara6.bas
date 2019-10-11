@extends('layouts.app')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Basic EnlighterJS Example | EnlighterJS</title>
    <!-- Include EnlighterJS Styles -->
    <link rel="stylesheet" type="text/css" href="../css/EnlighterJS.min.css"/>
    <!-- Include MooTools Framework -->
    <script type="text/javascript" src="../js/MooTools.min.js"></script>
    <!-- Include EnlighterJS -->
    <script type="text/javascript" src="../js/EnlighterJS.min.js"></script>
    {{--Include meta Requure--}}
    <meta name="EnlighterJS" content="Advanced javascript based syntax highlighting" data-language="javascript"
          data-indent="2" data-selector-block="pred" data-selector-inline="code"/>
</head>
<body>

<div id="app">
    <example-component></example-component>
    {{--<migrations-component title="{{$test}}" :migrations="{{json_encode($ars)}}"></migrations-component>--}}
{{--    <example-component title="{{$test}}" :migrations="@json($ars)"></example-component>--}}
<br>
</div>
<!-- Begin page content -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Migrations:</strong>

                <select class="browser-default custom-select">
                    @foreach($files as $file)
                        <option value="{{$loop->iteration}}"> {{$file}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <a class="btn btn-primary" href="/artisan_create_migrate"> Create migration</a>
    <a class="btn btn-primary" href="/artisan_migrate"> Create migration</a>
    <div class="page-header">
        <h1>
            Basic EnlighterJS Example </h1>
    </div>
    <div id="content">

        <!-- ############################################################# -->
        <div class="alert alert-success" role="alert">Level: <strong>Beginner</strong></div>

        <h3>Some Examples</h3>
        <h4>jQuery Code (Javascript) - highlighted by EnlighterJS</h4>
        <pred data-enlighter-language="jquery" data-enlighter-highlight="5">
$('#loading-example-btn').click(function () {
	var btn = $(this)
	btn.button('loading')
	$.ajax(...).always(function () {
		btn.button('reset')
	});
});

</pred>
        {{--<pre data-enlighter-language="php" data-enlighter-highlight="5">--}}
         {{--@foreach($files as $file)--}}
                {{--{{$file}}--}}
            {{--@endforeach--}}


        <h4>Code-Tabs</h4>
        <pred data-enlighter-language="jquery" data-enlighter-highlight="5" data-enlighter-group="group1">
$('#loading-example-btn').click(function () {
	var btn = $(this)
	btn.button('loading')
	$.ajax(...).always(function () {
		btn.button('reset')
	});
});
</pred>
        <pred data-enlighter-language="mootools" data-enlighter-highlight="1" data-enlighter-group="group1">
// initialize enlighterjs for block elements
EnlighterJS.Util.Helper(document.getElements('pre'), {
	// replace tabs with 2 spaces
	indent: 2,

	// special hover class
	hover: 'myHoverClass',

	// block element renderer
	renderer: 'Block'
});
</pred>

        <pred data-enlighter-language="php" data-enlighter-highlight="1,2,5" data-enlighter-group="group1">

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});
</pred>
    </div>
</div>

</body>

