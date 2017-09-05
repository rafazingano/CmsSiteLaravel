@extends($layout)

@push('styles')
<link href="{{ asset('assets/eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
<script src="{{ asset('assets/eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script>
$(document).ready(function () {
    $('#myTable').DataTable();
});
</script>
@endpush

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Data Table</h3>
            <p class="text-muted m-b-30">Data table example</p>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            @foreach($columns as $c){
                            <th>{{ $c }}</th>
                            @endforeach                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>                            
                            @foreach($columns as $column){
                            <th>{{ $c->$column }}</th>
                            @endforeach
                        </tr>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection