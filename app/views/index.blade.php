@extends('master')
@section('title')
Type 1 Diabetes Visualization Prototype 1
@stop
@section('body')
<div class="spinner" style="position:fixed; left: 35%; top: 50%"><img src="images/spinner.gif"></div>
<div style="position: fixed; right: 30px; top: 30px; padding: 20px; padding-left: 30px; padding-right: 30px; background-color: #eee; width: 350px">
    <div class="row-fluid">
        <h5>Total records {{ $totalRecords }}</h5>
    </div>
    <div class="row-fluid">
        <h5>Start Date</h5>

        <div class="input-group">
            <input type="text" class="form-control" id="datepicker">
            <span class="input-group-addon glyphicon glyphicon-calendar"></span>
        </div>



    </div>
    <div class="row-fluid">
        <h5>Number of Weeks to Display</h5>
    </div>
    <div class="row-fluid">
        <input type="text" class="slider weeks" value="" data-slider-min="1" data-slider-max="4" data-slider-step="1" data-slider-value="4" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="show" style="width: 100%">
    </div>
    
    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="row-fluid">
        <h5>View Mode</h5>
    </div>
    <div class="row-fluid">
        <div class="btn-group" data-toggle="buttons">

                <button id="viewmode" name="viewmode" class="viewmode btn btn-primary" data-value="0" value="0">Scatter Plot</button>


                <button id="viewmode" name="viewmode" class="viewmode btn btn-primary" data-value="1" value="1">Heat Map</button>


                <button id="viewmode" name="viewmode" class="viewmode btn btn-primary" data-value="2" value="2">Shape</button>


        </div>

    </div>
    
    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="row-fluid">
        <h5>Normal Range</h5>
    </div>
    <div class="row-fluid normalController">
        <input id="ex2" type="text" class="slider normalrange" value="" data-slider-min="50" data-slider-max="180" data-slider-step="5" data-slider-value="[70,120]" data-slider-orientation="horizontal" style="width:100%"/>

    </div>

    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="row-fluid" style="height: 30px">
	<div class="field switch">
		<label class="cb-enable selected" id="toggle_numbers"><span>On</span></label>
		<label class="cb-disable" id="toggle_numbers"><span>Off</span></label>
		&nbsp; Numbers
	</div>
    </div>

    <div class="row-fluid" style="height: 30px">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_mealtime"><span>On</span></label>
        <label class="cb-disable" id="toggle_mealtime"><span>Off</span></label>
        &nbsp; Meal Time
    </div>
    </div>

    <div class="row-fluid" style="height: 30px">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_weekdays"><span>On</span></label>
        <label class="cb-disable" id="toggle_weekdays"><span>Off</span></label>
        &nbsp; Weekdays
    </div>
    </div>

    <div class="row-fluid" style="height: 30px">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_weekends"><span>On</span></label>
        <label class="cb-disable" id="toggle_weekends"><span>Off</span></label>
        &nbsp; Weekends
    </div>
    </div>

    <div style="padding-top:10px;padding-bottom:10px"><hr></div>

    <div class="scatter" style="display:none;">
    <div class="row-fluid" style="height: 30px">
    <div class="field switch">
        <label class="cb-enable selected" id="toggle_normalrange"><span>On</span></label>
        <label class="cb-disable" id="toggle_normalrange"><span>Off</span></label>
        &nbsp; Normal Range B/G
    </div>
    </div>
    </div>
    <div class="row-fluid">
        <h5>Upload new BG data</h5>

        <form action="dataUpload" id="newDataForm" enctype="multipart/form-data" method="post">
            <div class="input-group">
                <input type="file" name="file" class="form-control" style="width: 180px">
                <button class="btn btn-primary btn-small">Submit</button>
            </div>
        </form>


    </div>
    <div class="row-fluid">
        <div style="padding-top: 15px; padding-bottom: 5px; color: #666; font-size: 10px;">Code by Joosung Kim (jooskim <i>at</i> umich.edu)</div>
    </div>
    <div class="row-fluid">
        <button class="btn btn-danger" id="eraseData">ERASE DATA</button>
        <div class="modal fade" id="deletionModal" tabIndex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Erase Data</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the data from the database? Data can't be recovered once deleted.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-warning">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="vizElement"></div>
@stop