<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .header {
            padding: 20px 0 20px;
        }

        .header h2 {
            margin: 0;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        <h2>Read JSON Data</h2>
    </header>

    <div id="loadData"></div>

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "https://jsonplaceholder.typicode.com/posts",
                type: "GET", // use get when getting data
                success: function(data) {
                    // $("#loadData").append(data.id + ": " + data.title);// show one record use each loop for show multiple data
                    $.each(data, function(key, val) {
                        $("#loadData").append(val.id + ": " + val.title + "<br>");
                    });
                }
            });
        });
    </script>
</body>

</html>