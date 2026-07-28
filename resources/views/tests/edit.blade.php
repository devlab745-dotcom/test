@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Test</div>

                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    @if($test)
                    <form method="POST" action="{{ route('tests.update', $test) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name', $test->name) }}" class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email', $test->email) }}" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="{{ route('tests.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                    @else
                        <div class="alert alert-warning">Record not found. <a href="{{ route('tests.index') }}">Back to list</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
