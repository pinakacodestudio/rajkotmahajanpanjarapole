@extends('frontend.layout.app')
@section('title','Payment Response ')
@section('internalcssjs')

<style>
    /* Print styles */
@media print {
    body {
        font-size: 12pt;
        color: #000;
    }

    /* Hide non-essential elements */
    .header, .footer, .sidebar, .advertisement, .no-print {
        display: none !important;
    }

    /* Ensure the main content uses the full width */
    .main-content {
        width: 100%;
        margin: 0;
    }

    /* Remove background colors */
    body, .main-content {
        background: #fff !important;
    }

    /* Adjust headings */
    h1, h2, h3, h4, h5, h6 {
        page-break-after: avoid;
    }

    /* Adjust links */
    a:link, a:visited {
        color: #000;
        text-decoration: underline;
    }
    
    /* Page breaks */
    .page-break {
        page-break-before: always;
    }

    /* Adjust tables */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #000;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }
}
</style>

@endsection
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-6 text-center col-md-offset-3" id="section-to-print" style="padding-top:100px;">
               
                <!-- Display other response details in a table -->
                <table class="table">
                    <tbody>
                        @foreach ($response as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Insert your database insertion logic here -->

                <br><hr>
            </div>
            <div class="clearfix"></div>
            <div class="text-center no-print ">
                <button class="btn btn-warning" onclick="printSection()">Print this page</button>
                
                <br>
                
                <br>
            </div>
        </div>
    </div>


@endsection
@section('internaljs')
<script>
function printSection() {
  var section = document.getElementById("section-to-print").innerHTML;
  var originalBody = document.body.innerHTML; // Store original body content

  // Replace body content with section content
  document.body.innerHTML = section;

  // Print the section
  window.print();

  // Restore original body content
  document.body.innerHTML = originalBody;
}
</script>
@endsection