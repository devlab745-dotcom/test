@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test Details</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th width="150">ID:</th>
                            <td>{{ $test->id ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{ $test->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $test->email ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Created At:</th>
                            <td>{{ $test->created_at ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Updated At:</th>
                            <td>{{ $test->updated_at ?? 'N/A' }}</td>
                        </tr>
                    </table>

                    <a href="{{ route('tests.edit', $test) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('tests.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
