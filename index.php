<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                <script>
                        $(document).ready(function(){
                                $("#2on").click(function(){
                                         $.get("2on.php");
                                });

                                $("#2off").click(function(){
                                        $.get("2off.php");
                                });
                        });
                </script>

        </head>
<body>

<button type="button" class="btn btn-primary btn-block" id="2on">On</button>
<button type="button" class="btn btn-primary btn-block" id="2off">Off</button>

</body>
</html>
