<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire lateral</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div id="main">
        <div class="topic">
            <label for="topicLab">HIRELATERAL MAIL FORM</label>
        </div>
        <hr>
        <p class="subtopic">ENTER TODAY TOP JOBS</p>
        <div class="btn">
            <button class="add">ADD MORE</button>
            <button class="remove">REMOVE</button>
        </div>
        <div class="job">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter text here">
                            <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="close-btn">X</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter text here">
                            <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="close-btn">X</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter text here">
                            <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="close-btn">X</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).on('click', '#close-btn', function() {
        $(this).closest('.card').remove();
    });
</script>
</html>