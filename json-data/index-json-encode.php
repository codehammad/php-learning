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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <header class="header">
        <h2>PHP with Ajax & JSON</h2>
    </header>

    <div id="loadData"></div>

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            // Short Hand of ajax json either use it or use bottom method 
            // $.getJSON(
            //     "fetch-json.php",
            //     function(data) {

            //         var table = '<table>';
            //         table += '<tr><th>ID</th><th>Title</th><th>Address</th></tr>';

            //         $.each(data, function(key, student) {
            //             table += '<tr>';
            //             table += '<td>' + student.sid + '</td>'; // Access sid
            //             table += '<td>' + student.sname + '</td>'; // Access sname
            //             table += '<td>' + student.saddress + '</td>'; // Access saddress
            //             table += '</tr>';
            //         });

            //         table += '</table>';

            //         $("#loadData").html(table);
            //     });

            $.ajax({
                url: "fetch-json.php",
                type: "POST",
                dataType: "json", // Expect JSON response
                success: function(data) {

                    var table = '<table>';
                    table += '<tr><th>ID</th><th>Title</th><th>Address</th></tr>';

                    $.each(data, function(key, student) {
                        table += '<tr>';
                        table += '<td>' + student.sid + '</td>';
                        table += '<td>' + student.sname + '</td>';
                        table += '<td>' + student.saddress + '</td>';
                        table += '</tr>';
                    });

                    table += '</table>';

                    $("#loadData").html(table);
                }
            });
        });
    </script>
</body>

</html>