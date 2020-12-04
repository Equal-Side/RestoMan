@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Show Permission
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.permissions.index') }}">
                    Back to list
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $permission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Title
                        </th>
                        <td>
                            {{ $permission->title }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.permissions.index') }}">
                    Back to list
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
