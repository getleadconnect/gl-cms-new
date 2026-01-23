@extends('app.design')
@section('css')
@endsection
@section('code')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
      <h3 class="page-title">Leads - Contact Us</h3>
    </div>
    <div class="col-12 col-sm-6 d-flex align-items-center">
      {{-- <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
        <a id="add-new-event" href="{{ url('get-add-faq-page') }}" class="btn btn-primary">
          <i class="material-icons">add</i> New FAQ </a>
      </div> --}}
    </div>
  </div>
    <table class="table faq-history">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>mobile</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>Comments</th>
                <th>Is Demo</th>
                <th>Location</th>
                <th>Created Date</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('.faq-history').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get-contact-us') }}",
                type: 'get',
                columns: [
                    {data: 'id',"render": function (data, type, full, meta) {
                            return meta.row + 1;
                        }
                    },
                    // {data: 'DT_RowIndex',name: 'DT_RowIndex'},
                    {data: 'name',name: 'name'},
                    {data: 'email',name: 'email'},
                    {data: 'mobile',name: 'mobile'},
                    {data: 'company',name: 'company'},
                    {data: 'country',name: 'country'},
                    {data:'comments' ,name:'comments'},
                    {data:'Isdemo' ,name:'Isdemo'},
                    {data:'location' ,name:'location'},
                    {data:'created_at' ,name:'created_at'},
                ]
            });
        });
    </script>
@endsection
@endsection
