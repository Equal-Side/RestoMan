@extends('layouts.admin')
@section('content')
<div class="content">
{{-- <a href="{{route('admin.kitchen')}}" class="btn btn-success mb-3">
        Refresh Board
    </a> --}}
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  <span class="font-weight-bold">Table : 1</span>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio <span class="bg-success float-right p-1 rounded">1/2</span></li>
                        <li class="list-group-item">Dapibus ac facilisis in <span class="bg-success float-right p-1 rounded">1</span></li>
                        <li class="list-group-item">Morbi leo risus <span class="bg-success float-right p-1 rounded">2</span></li>
                        <li class="list-group-item">Vestibulum at eros <span class="bg-success float-right p-1 rounded">1/2</span></li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-danger font-weight-bold"> Pending for kitchen response</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table : 2
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Morbi leo risus<span class="bg-success float-right p-1 rounded">1/4</span></li>
                        <li class="list-group-item">Porta ac consectetur ac <span class="bg-success float-right p-1 rounded">1/3</span></li>
                        <li class="list-group-item">Vestibulum at eros<span class="bg-success float-right p-1 rounded">1/2</span></li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-info font-weight-bold text-center"> Cooking!</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table:3
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio <span class="bg-success float-right p-1 rounded">1/2</span></li>
                        <li class="list-group-item">Dapibus ac facilisis in<span class="bg-success float-right p-1 rounded">2</span></li>
                        <li class="list-group-item">Morbi leo risus<span class="bg-success float-right p-1 rounded">1/2</span></li>
                        <li class="list-group-item">Porta ac consectetur ac<span class="bg-success float-right p-1 rounded">4</span></li>
                        <li class="list-group-item">Vestibulum at eros<span class="bg-success float-right p-1 rounded">3</span></li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-success font-weight-bold text-center">Complete! Waiting for serve</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table : 4
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-info font-weight-bold text-center"> Cooking!</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table:5
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-success font-weight-bold text-center">Complete! Waiting for serve</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table : 6
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-info font-weight-bold text-center"> Cooking!</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table : 7
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-info font-weight-bold text-center"> Cooking!</h4>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                  Table: 8
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>

                    </ul>
                </div>
                <div class="card-footer">
                    <h4 class="text-success font-weight-bold text-center">Complete! Waiting for serve</h4>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
