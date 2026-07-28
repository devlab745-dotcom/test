<!DOCTYPE html>
<html>
<head>
    <title>Demo Page</title>
</head>
<body>
    <h1>Test Data</h1>
    @foreach($test as $t)
        <p>{{ $t->name }} - {{ $t->email }}</p>
    @endforeach
</body>
</html>
