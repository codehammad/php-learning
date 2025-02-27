// function for load student record in table on page load
function loadTable() {
    fetch('php/load-table.php')
        .then((response) => response.json())
        .then((data) => {
            var tbody = document.getElementById('tbody');
            if (data['empty']) {
                tbody.innerHTML = '<tr><td colspan="6" align="center"><h3>No Record Found.</h3></td></tr>';
            } else {
                var tr = '';
                for (var i in data) {
                    tr += `<tr>
                    <td align="center">${data[i].sid}</td>
                    <td>${data[i].sname}</td>
                    <td>${data[i].cname}</td>
                    <td align="center"><button class="edit-btn" onclick="editRecord(${data[i].sid})">Edit</button></td>
                    <td align="center"><button class="delete-btn" onclick="deleteRecord(${data[i].sid})">Delete</button></td>
                </tr>`;
                }
                tbody.innerHTML = tr;
            }
        })
        .catch((error) => {
            show_message('error', "Can't Fetch Data");
        });
}

loadTable();
// Load Student Record on Page opening

// // Open Add new student Modal Box 
function addNewModal() {
    var addModal = document.getElementById("addModal");
    addModal.style.display = 'block';

    fetch('php/fetch-class-field.php')
        .then((response) => response.json())
        .then((data) => {
            var select = document.getElementById('classlist');
            var option = "<option selected disabled>Select Class</option>";
            for (var i = 0; i < data.length; i++) {
                option += `<option value="${data[i].cid}">${data[i].cname}</option>`;
            }
            select.innerHTML = option;
        })
        .catch((error) => {
            show_message('error', "Can't Fetch Class List");
        });
}

// // Hide Modal Box / Popup Box
function hide_modal() {
    var addModal = document.getElementById("addModal");
    addModal.style.display = 'none';

    var editModal = document.getElementById("modal");
    editModal.style.display = 'none';
}

// // Add Student Record
function submit_data() {
    var name = document.getElementById('name').value;
    var sClass = document.getElementById('classlist').value;

    if (name === '' || sClass === '0') {
        alert('Please Fill All The Fields');
        return false;
    } else {
        var formdata = {
            'name': name,
            'class': sClass
        }

        jsondata = JSON.stringify(formdata);

        fetch('php/fetch-insert.php', {
            method: 'POST',
            body: jsondata,
            headers: {
                'Content-type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((result) => {
                if (result.insert == 'success') {
                    show_message('success', 'Data Inserted Successfully.');
                    loadTable();
                    hide_modal();
                    document.getElementById('addModal-form').reset();
                } else {
                    show_message('error', "Data Can't Inserted.");
                    hide_modal();
                }
            })
            .catch((error) => {
                show_message('error', "Data not Inserted.");
            });
    }
}

// // Open Update Modal Box and show Student record in it.
function editRecord(id) {
    var editModal = document.getElementById("modal");
    editModal.style.display = 'block';

    fetch('php/fetch-edit.php?editId=' + id)
        .then((response) => response.json())
        .then((data) => {
            var option = '';
            for (var i in data['response']) {
                document.getElementById('edit-id').value = data['response'][i].sid;
                document.getElementById('edit-name').value = data['response'][i].sname;

                var selected = '';
                for (var j in data['class']) {
                    if (data['class'][j].cid === data['response'][i].sid) {
                        selected = 'selected';
                    } else {
                        selected = '';
                    }
                    option += `<option ${selected} value="${data['class'][j].cid}">${data['class'][j].cname}</option>`;
                }

                document.getElementById('edit-class').innerHTML = option;
            }
        })
        .catch((error) => {
            show_message('error', "Can't Fetch Data");
        });
}

// // Update student record
function modify_data() {
    var id = document.getElementById('edit-id').value;
    var name = document.getElementById('edit-name').value;
    var sClass = document.getElementById('edit-class').value;

    if (name === '' || sClass === '0') {
        alert('Please Fill All The Fields');
        return false;
    } else {
        var formdata = {
            's_id': id,
            'name': name,
            'class': sClass
        }

        jsondata = JSON.stringify(formdata);

        fetch('php/fetch-update.php', {
            method: 'PUT',
            body: jsondata,
            headers: {
                'Content-type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((result) => {
                if (result.update == 'success') {
                    show_message('success', 'Data Updated Successfully.');
                    loadTable();
                    hide_modal();
                } else {
                    show_message('error', "Data Can't Updated.");
                    hide_modal();
                }
            })
            .catch((error) => {
                show_message('error', "Data Can't Updated : Server Problem.");
            });
    }
}

// // Delete student record
function deleteRecord(id) {
    if (confirm("Are you sure want to Delete this record?")) {
        fetch('php/fetch-delete.php?delId=' + id, {
            method: 'DELETE'
        })
            .then((response) => response.json())
            .then((result) => {
                if (result.delete == 'success') {
                    show_message('success', 'Data Deleted Successfully.');
                    loadTable();
                } else {
                    show_message('error', "Data Can't Deleted.");
                }
            })
            .catch((error) => {
                show_message('error', "Data Can't Deleted : Server Problem.");
            });
    }
}

// // Search student record
function load_search() {
    var search = document.getElementById("search").value;

    if (search === '') {
        loadTable();
        return false;
    } else {
        fetch('php/fetch-search.php?search=' + search)
            .then((response) => response.json())
            .then((data) => {
                var tbody = document.getElementById('tbody');
                if (data['empty']) {
                    tbody.innerHTML = '<tr><td colspan="6" align="center"><h3>No Record Found.</h3></td></tr>';
                } else {
                    var tr = '';
                    for (var i in data) {
                        tr += `<tr>
                    <td align="center">${data[i].sid}</td>
                    <td>${data[i].sname}</td>
                    <td>${data[i].cname}</td>
                    <td align="center"><button class="edit-btn" onclick="editRecord(${data[i].sid})">Edit</button></td>
                    <td align="center"><button class="delete-btn" onclick="deleteRecord(${data[i].sid})">Delete</button></td>
                </tr>`;
                    }
                    tbody.innerHTML = tr;
                }
            })
            .catch((error) => {
                show_message('error', "Can't Fetch Data");
            });
    }
}

//show error / success message
function show_message(type, text) {
    if (type == 'error') {
        var message_box = document.getElementById('error-message');
    } else {
        var message_box = document.getElementById('success-message');
    }
    message_box.innerHTML = text;
    message_box.style.display = "block";
    setTimeout(function () {
        message_box.style.display = "none";
    }, 3000);
}