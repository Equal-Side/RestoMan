@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3> Reports Chart</h3>
                    <select  class="float-right" name="" id="" >
                        <option value="">Today</option>
                        <option value="">Yesterday</option>
                        <option value="" selected>Last 7 days</option>
                        <option value="">Last 30 Days</option>
                        <option value="">This month</option>
                        <option value="">Last month</option>
                    </select>

                </div>
                <div class="card-body">
                    <canvas id="myChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Top Dish Sells Today</h3>
                </div>
                <div class="card-body">
                    <canvas id="myBar" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
