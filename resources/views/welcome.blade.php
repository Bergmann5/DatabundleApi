<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="jquery-1.6.2.min.js"></script>
    </head>
    <body>
<h2>Internet bundle purchase</h2>

<form action="" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label for="slug" class="form-label col-sm-3">Network Provider:</label>
        <div class="col-sm-4">
            <select  class="form-control">
                <option value="">--Select Network--</option>


        </div>
    </div>
</form>
    </body>

    <script type="text/javascript">
        $('#json').click(function(){
            alert('json');
             $.getJSON("http://localhost:8080/restws/json/product/get",
             function(data) {
                alert(data);
              });
        });

        $('#ajax').click(function(){
            alert('ajax');
             $.ajax({
                 type: "GET",
                 dataType: "json",
                 url: "http://localhost:8080/restws/json/product/get",
                 success: function(data){
                    alert(data);
                 }
             });
        });

    </script>
</html>
