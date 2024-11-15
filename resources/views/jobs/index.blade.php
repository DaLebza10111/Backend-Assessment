<!DOCTYPE html>
<html>
<head>
    <title>Background Jobs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Background Jobs</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Class</th>
                    <th>Method</th>
                    <th>Status</th>
                    <th>Retries</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job['id'] }}</td>
                        <td>{{ $job['class'] }}</td>
                        <td>{{ $job['method'] }}</td>
                        <td>{{ $job['status'] }}</td>
                        <td>{{ $job['retries'] }}</td>
                        <td>
                            @if($job['status'] === 'running')
                                <form method="POST" action="{{ route('jobs.cancel', $job['id']) }}">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
