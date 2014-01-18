@extends('master')
@section('title')
test
@stop
@section('body')
<div class="spinner" style="position:relative;"><img src="images/spinner.gif"></div>
<div style="position: fixed; right: 30px; top: 30px; padding: 20px; padding-left: 30px; padding-right: 30px; background-color: #eee;">
    <div class="row-fluid">
        <h5>Number of Weeks to Display</h5>
    </div>
    <div class="row-fluid">
        <input type="text" class="slider" value="" data-slider-min="1" data-slider-max="4" data-slider-step="1" data-slider-value="4" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show">
    </div>

</div>


<div class="vizElement"></div>
@stop