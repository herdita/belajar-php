$(document).ready(function() {
    $('#example').DataTable({
        "ajax": "./data/object.txt",
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" },
            {
                "data": function(data, type, row) {
                    return '<a href="edit/' + data.id + '"> Edit </a>'
                },
            }
        ]
    });
});