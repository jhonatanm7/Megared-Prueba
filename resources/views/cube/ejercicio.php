<!DOCTYPE html>
<html>
<head>
    <title>Soluci&oacute;n Cube Summation Yonatan Montoya</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
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
    </div><!-- /.container-fluid -->
</nav>
<div class="links">
             <a href="#collapse1">Inicio</a>
             <a href="#collapse2">Prueba</a>
         </div>
<div class="container" id="main">
	
    <div class="panel-group" id="accordion">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Explanation Cube Summation:
                        Sample</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="input">Sample Input</label>
                            <textarea class="form-control" rows="12" cols="10" id="sinput" name="sinput"
                                      readonly="true">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="output">Sample Output</label>
                            <textarea class="form-control" rows="6" cols="10" id="soutput" name="soutput" value=""
                                      readonly="true">
                            </textarea>
                        </div>
                        <h4><strong class="text-primary">Explanation</strong></h4>
                        First test case, we are given a cube of 4 * 4 * 4 and 5 queries. Initially all the cells (1,1,1)
                        to (4,4,4) are 0.<br>
                        <strong>UPDATE 2 2 2 4</strong> makes the cell (2,2,2) = 4<br>
                        <strong>QUERY 1 1 1 3 3 3.</strong> As (2,2,2) is updated to 4 and the rest are all 0. The
                        answer to this query is 4.<br>
                        <strong>UPDATE 1 1 1 23.</strong> updates the cell (1,1,1) to 23. <strong>QUERY 2 2 2 4 4
                            4.</strong> Only the
                        cell (1,1,1) and (2,2,2) are non-zero and (1,1,1) is not between (2,2,2) and (4,4,4). So, the
                        answer is 4.<br>
                        <strong>QUERY 1 1 1 3 3 3.</strong> 2 cells are non-zero and their sum is 23+4 = 27.<br>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Proves The program!</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <h4 class="text-primary text-center">Please, Insert the lines to run the program:</h4>
                    <div class="col-md-8 text-center col-md-offset-2">
                        <form action="{{route('cube.execute')}}" method="POST" name="formCreate" id="inputForm"
                              role="form">
                            <div class="form-group">
                                <label for="input">Input:</label>
                                {{csrf_field()}}
                                <textarea class="form-control" rows="10" cols="10" id="input" name="input"
                                          form="inputForm"
                                          required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="button" onclick="config();" id="execute" name="execute"
                                        class="btn btn-primary">Execute!
                                </button>
                            </div>
                        </form>
                        <br><br>
                        <div class="form-group">
                            <label for="output">Output:</label>
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