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
        <h2>PHP AJAX CRUD</h2>
        <div id="search-data">
            <label>Search :</label>
            <input type="text" placeholder="Search.." id="search" autocomplete="off">
        </div>
    </header>

    <form id="insertForm">
        <label for="sname">Student Name:</label>
        <input type="text" id="sname" name="sname" required>
        <br><br>
        <button id="saveButton" type="submit">Insert Data</button>
    </form>

    <hr>
    <div id="tableData"></div>
    <div id="success"></div>
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Edit Student</h3>
            <div class="form-place"></div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST",
                    success: function(data) {
                        $("#tableData").html(data);
                    }
                });
            }
            loadTable();
            // Insert
            $("#saveButton").on("click", function(e) {
                e.preventDefault();

                var sname = $("#sname").val();

                if (sname == "") {
                    alert("Student name cannot be empty");
                } else {
                    $.ajax({
                        url: "ajax-insert.php",
                        type: "POST",
                        data: {
                            s_name: sname
                        },
                        success: function(data) {
                            if (data == 1) {
                                loadTable();
                                $("#sname").val(""); // either clear input value this way
                                //$("#insertForm").trigger("reset");// or this way
                                $("#success").html("<p style='color: green;'>Record inserted successfully!</p>");
                            } else {
                                alert("Error inserting data");
                            }

                        }
                    });
                }

            });
            // Delete
            $(document).on("click", "#deleteButton", function() {
                if (confirm("Do you really want to delete this record")) {
                    var student_id = $(this).data("id");
                    var selected_item = this;

                    $.ajax({
                        url: "ajax-delete.php",
                        type: "POST",
                        data: {
                            id: student_id
                        },
                        success: function(data) {
                            if (data == 1) {
                                loadTable(); // Reload table after deletion
                                //$(selected_item).closest("tr").fadeOut(); for fade effect
                                $("#success").html("<p style='color: green;'>Record deleted successfully!</p>");
                            } else {
                                alert("Error deleting record");
                            }
                        }
                    });
                }

            });

            //Edit
            $(document).on("click", "#editButton", function() {

                var student_id = $(this).data("eid");

                // Show modal
                $("#editModal").show();

                $.ajax({
                    url: "load-update-form.php",
                    type: "POST",
                    data: {
                        id: student_id
                    },
                    success: function(data) {
                        $(".modal-content .form-place").html(data);
                    }
                });

                // Close the modal
                $(".close").on("click", function() {
                    $("#editModal").hide();
                });



            });
            // form edit ka save button ki logic
            $(document).on("click", "#updateButton", function(e) {
                e.preventDefault();
                var student_id = $("#editId").val();
                var student_name = $("#editName").val();

                $.ajax({
                    url: "ajax-update-form.php",
                    type: "POST",
                    data: {
                        id: student_id,
                        name: student_name
                    },
                    success: function(data) {
                        // if data recieve 1 from file its means correct
                        if (data == 1) {
                            // Close modal and reload table after update
                            $("#editModal").hide();
                            loadTable();
                        }

                    }
                });
            });

            // Live Search
            $("#search").on("keyup", function() {
                var search_term = $(this).val();

                $.ajax({
                    url: "ajax-live-search.php",
                    type: "POST",
                    data: {
                        search: search_term
                    },
                    success: function(data) {
                        $("#tableData").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>