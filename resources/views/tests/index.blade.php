@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tests</h1>
        <a href="{{ route('tests.create') }}" class="btn btn-primary">Create Test</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tests as $test)
                        <tr>
                            <td>{{ $test->id }}</td>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->email }}</td>
                            <td>
                                <a href="{{ route('tests.show', $test) }}" class="btn btn-sm btn-info">Show</a>
                                <a href="{{ route('tests.edit', $test) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('tests.destroy', $test) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $tests->links() }}
    </div>
</div>
@endsection
