
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Two - Result</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
<body>
<div class="container">
    <div class="row">


        <div class="col-lg-8 m-auto mt-5    ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Mark</th>
                        <th>Grade</th>
                        {{-- <th>Total</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr colspan="3  ">
                        <td >Bangla</td>
                        <td>{{ $result->bangla }}</td>
                        <td>{{ $grade['bangla'] }}</td>
                    </tr>
                    <tr colspan="3">
                        <td>English</td>
                        <td>{{ $result->english }}</td>
                        <td>{{ $grade['english'] }}</td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>{{ $result->math }}</td>
                        <td>{{ $grade['math'] }}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td colspan="2">{{ $result->total_marks }}</td>
                    </tr>
                    <tr>
                        <th>Grade</th>
                        <td colspan="2">{{ $result->total_grade }}</td>
                    </tr>

                </tbody>
            </table>
            <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
