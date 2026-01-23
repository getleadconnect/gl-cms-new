@extends('app.design')
@section('css')
@endsection
@section('code')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
      <h3 class="page-title">Testimonials</h3>
    </div>
    <div class="col-12 col-sm-6 d-flex align-items-center">
      <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
        <a id="add-new-event" href="{{ route('get-add-tesimonial-page') }}" class="btn btn-primary">
          <i class="material-icons">add</i> New Testimonial </a>
      </div>
    </div>
  </div>
    <table class="table transaction-history display " style="width:150%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Designation</th>
                <th>Description</th>
                <th>Created By</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
{{-- delete confirmation modal: start --}}
    <div id="deleteModal" class="modal">
        <form class="modal-content">
          <div class="">
            <input type="hidden" id="testimonial_id">
            <h6>Delete Testimonial</h6>
            <p>Are you sure you want to delete?</p>

            <div class="clearfix">
              <button type="button" class="cancelbtn">Cancel</button>
              <button type="button"  class="deletebtn">Delete</button>
            </div>
          </div>
        </form>
      </div>
{{-- delete confirmation modal:end --}}
@section('script')
    <script>
        $(document).ready(function() {
            // $.toaster({ message : 'fhdh' , priority : 'success' });
            var table = $('.transaction-history').DataTable({
                processing: true,
                serverSide: true,
				scrollX:true,
                ajax: "{{ route('testimonial.get-data') }}",
                type: 'get',
				
                /*"fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                    var imgLink = aData['image']; // if your JSON is 3D
                    // var imgLink = aData[4]; // where 4 is the zero-origin column for 2D

                    var imgTag = '<img src="' + imgLink +'" width="50" height="50"/>';
                    $('td:eq(2)', nRow).html(imgTag); // where 4 is the zero-origin visible column in the HTML

                    return nRow;
                    },*/
					
                columns: [
                    {data: 'id',"render": function (data, type, full, meta) {
                            return meta.row + 1;
                        }
                    },
                    {data: 'name',name: 'name'},
                    {data: 'image',name: 'image'},
                    {data: 'designation',name: 'designation'},
                    {data: 'description',name: 'description'},
                    {data: 'created_by',name: 'created_by'},
                    {data: 'status',name: 'status'},
                    {data: 'action',name: 'action'},

                ]
            });

            $(document).on('click','.statusChange',function () {
                $.ajax({
                    type:'POST',
                    url:"{{ route('testimonial-change-status') }}",
                    data:{
                            "_token": "{{ csrf_token() }}",
                            "id" : $(this).data('id')
                        },
                    success:function(data) {
                        table.ajax.reload();
                        if (data.status == 1) {
                            toastr.success(data.message);
                        }else{
                            toastr.error(data.message);
                        }

                    }
                });
            })

            $(document).on('click','.deleteTestimonial',function () {
                $('#deleteModal').modal('show');
                $('#testimonial_id').val($(this).data('id'))
                $(document).on('click','.deletebtn',function () {
                    $('.deletebtn').attr('disabled',true);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('testimonial.delete') }}",
                        data:{
                                "_token": "{{ csrf_token() }}",
                                "slug" : $('#testimonial_id').val()
                            },
                        success:function(data) {
                            table.ajax.reload();
                            $('#deleteModal').modal('hide');
                            if (data.status == 1) {
                                toastr.success(data.message);
                            }else{
                                toastr.error(data.message);
                            }
                        }
                    });
                })
                $(document).on('click','.cancelbtn',function () {
                    $('#deleteModal').modal('hide');
                })
            })
        });
    </script>
@endsection
@endsection
