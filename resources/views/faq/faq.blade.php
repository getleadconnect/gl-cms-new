@extends('app.design')
@section('css')
@endsection
@section('code')
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
      <h3 class="page-title">FAQ</h3>
    </div>
    <div class="col-12 col-sm-6 d-flex align-items-center">
      <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
        <a id="add-new-event" href="{{ route('get-add-faq-page') }}" class="btn btn-primary">
          <i class="material-icons">add</i> New FAQ </a>
      </div>
    </div>
  </div>
    <table class="table faq-history">
        <thead>
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Created_By</th>
                <th>Status</th>
                <th>Actions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
{{-- delete confirmation modal: start --}}
    <div id="deleteModal" class="modal">
        <form class="modal-content">
          <div class="">
            <input type="hidden" id="faq_id">
            <h6>Delete Client</h6>
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

		var table = $('.faq-history').DataTable({
        processing: true,
        serverSide: true,

        ajax:
		{
			url:"{{ route('get-faq-data') }}",
			/*data: function (data) 
		    {
               data.search = $('input[type="search"]').val();
		    },*/
        },
		
		columnDefs:[
				  {"width":"50px","targets":0},
			],
	
        columns: [
            {data:'id' },
			{data: 'question'},
            {data: 'answer'},
            {data: 'created_by'},
            {data: 'status'},
            {data: 'action'},
        ],

    });	

            $(document).on('click','.statusChange',function () {
                $.ajax({
                    type:'POST',
                    url:"{{ route('faq-change-status') }}",
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

            $(document).on('click','.deleteFAQ',function () {
                $('#deleteModal').modal('show');
                $('#faq_id').val($(this).data('id'))
                $(document).on('click','.deletebtn',function () {
                    $('.deletebtn').attr('disabled',true);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('faq-delete') }}",
                        data:{
                                "_token": "{{ csrf_token() }}",
                                "slug" : $('#faq_id').val()
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
