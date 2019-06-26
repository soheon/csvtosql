@extends('layouts.app')

@section('content')
    
    <div class="form">
        <div class="form-group">
            <button type="button" class="btn btn-info btn-lg" style= "" data-toggle="modal" data-target="#myModal">Export HTML table to CSV file</button>
        </div>
    </div>
        <form id="frm-example" action ="">
        <table id="csvdata" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>County</th>
                    <th>Zip</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Timezone</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['csvdata'] as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->county }}</td>
                    <td>{{ $user->zip }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->timezone }}</td>
                    <td>{{ $user->gender }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>County</th>
                    <th>Zip</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Timezone</th>
                    <th>Gender</th>
                </tr>
            </tfoot>
        </table>
        
        </form>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form action ="/export/csv" method="post">
                    {{csrf_field()}}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Export to CSV</h4>
                        </div>
                        <div class="modal-body">
                            <p>File Name to Exprot</p>
                            <input type = "text" class= "" name = "bus" value="{{ $data['bus'] }}">
                            <input type = "text" class = "" name = "area" value="{{ $data['area'] }}" />
                            <input type = "text" class="" name = "exportName"/>
                            <input type = "text" name = "exportId" id = "exportId"/>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" >Export</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    
    <script>
    $(document).ready(function() {
        var table = $('#csvdata').DataTable({     
            'columnDefs': [
                {
                    'targets': 0,
                    'checkboxes': {
                    'selectRow': true
                    }
                }
            ],
            'select': {
                'style': 'multi'
            },
            'order': [[1, 'asc']],
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
        
        // Handle form submission event 
        $('#frm-example').on('click', function(e){
            var form = this;
            
            var rows_selected = table.column(0).checkboxes.selected();
            console.log(rows_selected.join(";"))

            document.getElementById("exportId").value = rows_selected.join(";");
            // $("#exportId").value(rows_selected);
            // Iterate over all selected checkboxes
            $.each(rows_selected, function(index, rowId){
                // Create a hidden element 
                $(form).append(
                    $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', 'id[]')
                        .val(rowId)
                );
            });

            // FOR DEMONSTRATION ONLY
            // The code below is not needed in production
            
            // Output form data to a console     
            $('#example-console-rows').text(rows_selected.join(","));
            // Output form data to a console     
            $('#example-console-form').text($(form).serialize());
            
            // Remove added elements
            $('input[name="id\[\]"]', form).remove();
            
            // Prevent actual form submission
            e.preventDefault();
        });   
        function download_csv(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV FILE
            csvFile = new Blob([csv], {type: "text/csv"});

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // We have to create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Make sure that the link is not displayed
            downloadLink.style.display = "none";

            // Add the link to your DOM
            document.body.appendChild(downloadLink);

            // Lanzamos
            downloadLink.click();
        }

        function export_table_to_csv(html, filename) {
            var csv = [];
            var rows = document.querySelectorAll("table tr");
            
            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll("td, th");
                
                console.log(cols[0]);
                for (var j = 0; j < cols.length; j++) 
                    row.push(cols[j].innerText);
                
                csv.push(row.join(","));		
            }

            // Download CSV
            download_csv(csv.join("\n"), filename);
        }

        document.querySelector("#csv_btn").addEventListener("click", function () {
            var html = document.querySelector("table").outerHTML;
            export_table_to_csv(html, "table.csv");
            console.log("button clicked");
        });

        });

    </script>

@endsection
