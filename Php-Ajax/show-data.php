<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>

<body>
    <h1>Php Ajax Basic Show data</h1>

    <button id="loadButton">Load Data</button>

    <hr>
    <div id="tableData">
        
    </div>

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loadButton").on("click", function(e) {
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST",
                    success: function(data) {
                        $("#tableData").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>