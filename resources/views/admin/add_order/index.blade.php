@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3> Add New Order</h3>
                </div>
                <div class="card-body">

                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Select Table</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Select Dish</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Palov</option>
                                        <option value="">Shashlik</option>
                                        <option value="">Tandir</option>
                                        <option value="">Stake</option>
                                        <option value="">Drink</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Dish Type</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Hot Meal</option>
                                        <option value="">Salad</option>
                                        <option value="">Cold Drink</option>
                                        <option value="">Hot Drink</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">Quantity</label>
                                    <input class="form-control" type="number" min="1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input  class="form-control" type="text" disabled placeholder="">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">

                    <form action="">
                        <div class="row">

                            <div class="table-responsive">
                                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                                    <thead>
                                        <tr>

                                            <th>
                                                Dish Name
                                            </th>
                                            <th>
                                                Type
                                            </th>
                                            <th>
                                                Price (USD)
                                            </th>
                                            <th>
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="row">

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection



