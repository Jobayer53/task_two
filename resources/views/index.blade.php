<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Two</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Task Two</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5>Input Results</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('result.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Bangla</label>
                            <input type="number" class="form-control" name="bangla" placeholder="90" required min="0">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">English</label>
                            <input type="number" class="form-control" name="english" placeholder="80" required min="0">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Math</label>
                            <input type="number" class="form-control" name="math" placeholder="70"  required min="0">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Total Marks</th>
                        <th>Grade</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $results as $result)
                    <tr> <tr>
                        <td>
                            {{ $result->id }}
                        </td>
                        <td>{{ $result->total_marks }}</td>
                        <td>{{ $result->total_grade }}</td>
                        <td>
                            <a href="{{ route('result.show', $result->id) }}" class="btn btn-primary">Mark Sheet</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>
                            NO DATA FOUND
                        </td>
                    </tr>

                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
