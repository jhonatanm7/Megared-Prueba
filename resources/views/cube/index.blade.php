<!DOCTYPE html>
<html>
<head>
    <title>Soluci&oacute;n Cube Summation Yonatan Montoya</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Soluci&oacute;n Cube Summation Yonatan Montoya</a>
        </div>
    </div>
</nav>
<div class="container" id="main">
    <div class="panel-group" id="accordion">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">                   
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">Ejecutar programa</h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                    <h4 class="text-primary text-center">Por favor inserte las lineas:</h4>
                    <div class="col-md-8 text-center col-md-offset-2">
                        <form action="{{route('cube.execute')}}" method="POST" name="formCreate" id="inputForm"
                              role="form">
                            <div class="form-group">
                                <label for="input">Entrada:</label>
                                {{csrf_field()}}
                                <textarea class="form-control" rows="10" cols="10" id="input" name="input"
                                          form="inputForm"
                                          required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="button" onclick="config();" id="execute" name="execute"
                                        class="btn btn-primary">Ejecutar!
                                </button>
                            </div>
                        </form>
                        <br><br>
                        <div class="form-group">
                            <label for="output">Salida:</label>
                                <textarea class="form-control" rows="10" cols="10" id="output" name="output" value=""
                                          readonly="true"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/requestManager.js"></script>
</body>
</html>