<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <h1>Danh sachs Sinh vien</h1>
    @foreach ($student as $stu)
        <div>
            {{ $stu->name }}
        </div>
    @endforeach
    <li>{{ $student->links() }}</li>
    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>

            <li class="page-item"><a class="page-link" href="#"> {{ $student->links() }}</a></li>

            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav> --}}
</body>

</html>
