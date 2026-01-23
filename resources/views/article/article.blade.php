@extends('app.design')
@section('css')
@endsection
@section('code')

<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
      <h3 class="page-title">Help Center</h3>
    </div>
    <div class="col-12 col-sm-6 d-flex align-items-center">
      <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
        <a id="add-new-event" href="{{ route('add-article-page') }}" class="btn btn-primary">
          <i class="material-icons">add</i>New Section</a>
      </div>
    </div>
  </div>
    <table class="table article-history">
        <thead>
            <tr>
                <th>#</th>
                <th>Section Name</th>
                <th>Title</th>
                {{-- <th>Description</th> --}}
                <th>Article Type</th>
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
            <input type="hidden" id="article_id">
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
            // $.toaster({ message : 'fhdh' , priority : 'success' });

		var suc_mes="{{ session('success') }}";
		if(suc_mes!=""){  toastr.success(suc_mes);	}
		
		var err_mes="{{ session('danger') }}";
		if(err_mes!=""){  toastr.error(err_mes);	}
	
		var table = $('.article-history').DataTable({
			processing: true,
			serverSide: true,

			ajax:
			{
				url:"{{ route('article-page') }}",
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
				{data: 'name'},
				{data: 'article_title'},
				// {data: 'article_description'},
				{data: 'article_type'},
				{data: 'created_by'},
				{data: 'status'},
				{data: 'action'},
			],
			
		});	


            $('.article-history tbody').on('click', 'td.dt-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });

            function format(d) {
                var route = '';
                var html = '<table cellpadding="5" cellspacing="0" border="0">'+'<tr><th>Title</th>'+'<th>Status</th>'+'<th>Action</th></tr>';
                // `d` is the original data object for the row
                $.each(d.article_details, function (key, d) {
                    route = location.origin + '/admin/detail-edit-page/'+d.id;
                    $btn = ` <a type="button" class="btn btn-white detailStatusChange" data-id="`+d.id+`">
                               <i class="material-icons">&#xE5CA;</i>
                            </a>
                            <a type="button" class="btn btn-white editArticle" href='`+route+`'>
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-white deleteArticleDetails" data-id="`+d.id+`">
                               <i class="material-icons">&#xE872;</i>
                            </a>`;
                    if (d.status == 1) {
                        $label = '<label class="success">Enabled</label>';
                    }else{
                        $label = '<label class="danger">Disabled</label>';
                    }
                    html += '<tr><td>'+d.title+'</td><td>'+$label+'</td><td>'+$btn+'</td></tr>';
                });
                html +='</table>';
                return html;
            }

            $(document).on('click','.statusChange',function () {
                $.ajax({
                    type:'POST',
                    url:"{{ route('article-change-status') }}",
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

            $(document).on('click','.deleteArticle',function () {
                $('#deleteModal').modal('show');
                $('#article_id').val($(this).data('id'))
                $(document).on('click','.deletebtn',function () {
                    $('.deletebtn').attr('disabled',true);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('article-delete') }}",
                        data:{
                                "_token": "{{ csrf_token() }}",
                                "slug" : $('#article_id').val()
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

            $(document).on('click','.detailStatusChange',function(){
                $.ajax({
                    type:'POST',
                    url:"{{ route('article-detail-change-status') }}",
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
            });

            $(document).on('click','.deleteArticleDetails',function () {
                $('#deleteModal').modal('show');
                $('#article_id').val($(this).data('id'))
                $(document).on('click','.deletebtn',function () {
                    $('.deletebtn').attr('disabled',true);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('article-details-delete') }}",
                        data:{
                                "_token": "{{ csrf_token() }}",
                                "id" : $('#article_id').val()
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
