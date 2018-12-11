<!doctype html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <meta name="viewpoint" content="width=device-width,initial-scale=1.0"/>
    <title>Your Website</title>
    <link rel="stylesheet" href="" type="text/css">
    <script type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Medicine Stock</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Enter Medicine Details</div>
                    <div class="panel-body">
                        <form method="post" action="action.php">
                            <table class="table table-hover">
                                <tr>
                                    <td>Medicine Name</td>
                                    <td><input type="text" class="form-control" name="name" placeholder="Enter Medicine name"> </td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td><input type="text" class="form-control" name="qty" placeholder="Enter Quantity"> </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Store"> </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Medicine Name</th>
                    <th>Available Stock</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Combiflame</td>
                    <td><b>45</b></td>
                    <td><a href="#" class="btn btn-info">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>