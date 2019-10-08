<head>
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
          data-indent="2" data-selector-block="pre" data-selector-inline="code"/>
</head>
<body>
<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>
            Basic EnlighterJS Example </h1>
    </div>
    <div id="content">
        <!-- ############################################################# -->
        <div class="alert alert-success" role="alert">Level: <strong>Beginner</strong></div>

        <h3>Some Examples</h3>
        <h4>jQuery Code (Javascript) - highlighted by EnlighterJS</h4>
        <pre data-enlighter-language="jquery" data-enlighter-highlight="5">
$('#loading-example-btn').click(function () {
	var btn = $(this)
	btn.button('loading')
	$.ajax(...).always(function () {
		btn.button('reset')
	});
});
</pre>

        <h4>Code-Tabs</h4>
        <pre data-enlighter-language="jquery" data-enlighter-highlight="5" data-enlighter-group="group1">
$('#loading-example-btn').click(function () {
	var btn = $(this)
	btn.button('loading')
	$.ajax(...).always(function () {
		btn.button('reset')
	});
});
</pre>
        <pre data-enlighter-language="mootools" data-enlighter-highlight="1" data-enlighter-group="group1">
// initialize enlighterjs for block elements
EnlighterJS.Util.Helper(document.getElements('pre'), {
	// replace tabs with 2 spaces
	indent: 2,

	// special hover class
	hover: 'myHoverClass',

	// block element renderer
	renderer: 'Block'
});
</pre>


        <pre data-enlighter-language="php" data-enlighter-highlight="1,2,5"   data-enlighter-group="group1">

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});
            return $v={{$v}}
</pre>



</div>
<!-- // container -->
</body>

