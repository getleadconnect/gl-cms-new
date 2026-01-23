@extends('app.design')
@section('css')
@endsection
@section('code')

<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
      <h3 class="page-title">Blog</h3>
    </div>
    <div class="col-12 col-sm-6 d-flex align-items-center">
      <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
        <a id="add-new-event" href="{{ route('add-blog-page') }}" class="btn btn-primary">
          <i class="material-icons">add</i> New Blog </a>
      </div>
    </div>
  </div>
    <table class="table blog-history">
        <thead>
            <tr>
                <th>#</th>
                <th>Blog Name</th>
                <th>Title</th>
                <th>Blog Category</th>
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
            <input type="hidden" id="blog_id">
            <h6>Delete Blog</h6>
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
       	   
		var table = $('.blog-history').DataTable({
			processing: true,
			serverSide: true,

			ajax:
			{
				url:"{{ route('get-blog-page') }}",
				/*data: function (data) 
				{
				   data.search = $('input[type="search"]').val();
				},*/
			},
			
			columnDefs:[
					  {"width":"50px","targets":0},
				],
		
			columns: [
				{"data": "id" },
				{"data": "name"},
				{"data": "blog_title" },
				{"data": "blog_type" },
				{"data": "created_by" },
				{"data": "status" },
				{"data": "action" },
			],

		});	
			
			

            $('.blog-history tbody').on('click', 'td.dt-control', function () {
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
                $.each(d.blog_details, function (key, d) {
                    route = location.origin + '/admin/blog-detail-edit-page/'+d.slug;
                    $btn = ` <a type="button" class="btn btn-white detailStatusChange" data-id="`+d.id+`">
                               <i class="material-icons">&#xE5CA;</i>
                            </a>
                            <a type="button" class="btn btn-white editArticle" href='`+route+`'>
                                <i class="material-icons">&#xE254;</i>
                            </a>
                            <a type="button" class="btn btn-white deleteBlogDetails" data-id="`+d.id+`">
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
                    url:"{{ route('blog-change-status') }}",
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

            $(document).on('click','.deleteBlog',function () {
                $('#deleteModal').modal('show');
                $('#blog_id').val($(this).data('id'))
                $(document).on('click','.deletebtn',function () {
                    $('.deletebtn').attr('disabled',true);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('blog-delete') }}",
                        data:{
                                "_token": "{{ csrf_token() }}",
                                "slug" : $('#blog_id').val()
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
                    url:"{{ route('blog-detail-change-status') }}",
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

            $(document).on('click','.deleteBlogDetails',function () {
                $('#deleteModal').modal('show');
                $('#blog_id').val($(this).data('id'))
                $(document).on('click','.deletebtn',function () {
                    $('.deletebtn').attr('disabled',true);
                    $.ajax({
                        type:'POST',
                        url:"{{ route('blog-details-delete') }}",
                        data:{
                                "_token": "{{ csrf_token() }}",
                                "id" : $('#blog_id').val()
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
