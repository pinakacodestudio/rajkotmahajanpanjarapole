@extends('frontend.layout.app')
@section('title','Payment Response ')
@section('internalcssjs')
@endsection
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-6 text-center col-md-offset-3" id="section-to-print" style="padding-top:100px;">
               
                <!-- Display other response details in a table -->
                <table class="table">
                    <tbody>
                        @foreach ($responseMap as $key => $value)
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
            <div class="text-center">
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