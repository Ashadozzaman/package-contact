<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Contact us Any times</h1>
        <div class="row">
            <form action="{{route('contact')}}" method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="col-md-6">
                    <label for="">Message</label>
                    <input type="text" class="form-control" name="message">
                </div>
                <br>
                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
