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
    
    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="row-fluid">
        <h5>View Mode</h5>
    </div>
    <div class="row-fluid">
        <input type="radio" id="viewmode" name="viewmode" class="viewmode" value="0"> Scatter Plot
        <input type="radio" id="viewmode" name="viewmode" class="viewmode" value="1"> Heat Map
        <input type="radio" id="viewmode" name="viewmode" class="viewmode" value="2"> Shape
    </div>
    
    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="row-fluid">
	<div class="field switch">
		<label class="cb-enable selected" id="toggle_numbers"><span>On</span></label>
		<label class="cb-disable" id="toggle_numbers"><span>Off</span></label>
		&nbsp; Numbers
	</div>
    </div>

    <div class="row-fluid">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_mealtime"><span>On</span></label>
        <label class="cb-disable" id="toggle_mealtime"><span>Off</span></label>
        &nbsp; Meal Time
    </div>
    </div>

    <div class="row-fluid">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_weekdays"><span>On</span></label>
        <label class="cb-disable" id="toggle_weekdays"><span>Off</span></label>
        &nbsp; Weekdays
    </div>
    </div>

    <div class="row-fluid">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_weekends"><span>On</span></label>
        <label class="cb-disable" id="toggle_weekends"><span>Off</span></label>
        &nbsp; Weekends
    </div>
    </div>

    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="scatter" style="display:none;">
    <div class="row-fluid">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_normalrange"><span>On</span></label>
        <label class="cb-disable" id="toggle_normalrange"><span>Off</span></label>
        &nbsp; Normal Range B/G
    </div>
    </div>
    </div>
</div>


<div class="vizElement"></div>
@stop