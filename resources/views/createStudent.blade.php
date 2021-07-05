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

    <form action="{{ route('listStudent.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name student</label>
            <input name="namestu" type="name" class="form-control" id="exampleFormControlInput1"
                placeholder="your Name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="Emailstu" type="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">age student</label>
            <input name="ageStu" type="number" class="form-control" id="exampleFormControlInput1"
                placeholder="age student">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">create</button>
        </div>
    </form>

</body>

</html>
