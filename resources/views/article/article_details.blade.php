@extends('app.design')
@section('css')
<style>
    .dataTables_wrapper table.dataTable tbody td {
        text-align: left !important;
    }
    td img{
        width: 80% !important;
    }
</style>
@endsection
@section('code')

<div class="row">
    <div class="col-sm-12">
       <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
          <div class="slider"></div>
          {{-- <li class="nav-item" style="margin-right:40px"> 
            <a class="nav-link active" id="log-tab" data-toggle="tab" href="#help-center2" role="tab"
               aria-controls="log" aria-selected="false" >
            help center
            </a>
         </li> --}}
          {{-- <li class="nav-item" style="margin-right:40px"> 
             <a class="nav-link" id="l-activity-tab" data-toggle="tab" href="#help-center1" role="tab"
                aria-controls="log" aria-selected="false" >
             help center 1
             </a>
          </li> --}}
       </ul>
    </div>
</div>
<div id="help-center1">
    <div class="page-header row no-gutters py-4" >
        <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
        <h3 class="page-title"> Topics</h3>
        </div>
    
        <div class="col-12 col-sm-6 d-flex align-items-center">
        <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
            <a id="add-new-event" href="{{ route('add-more-article-page',$id) }}" class="btn btn-primary">
            New Topics </a>
        </div>
        </div>
    </div>
    <table class="table article-history">
        <thead>
            <tr>
                <th>#</th>
                <th> Name</th>
                {{-- <th>Article Title</th> --}}
                <th>Description</th>
                {{-- <th>Article Type</th>
                <th>Created By</th> --}}
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
      <div class="tab-pane fade show  tab-sec-col" id="help-center2" role="tabpanel" aria-labelledby="l-activity-tab">
        <div class="page-header row no-gutters py-4" >
            <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
            <h3 class="page-title"> Topics</h3>
            </div>
        
            <div class="col-12 col-sm-6 d-flex align-items-center">
            <div class="d-inline-flex mb-sm-0 mx-auto ml-sm-auto mr-sm-0" role="group" aria-label="Page actions">
                <a id="add-new-event" href="{{ route('add-article-detail-page',$id) }}" class="btn btn-primary">
                New Topics </a>
            </div>
            </div>
        </div>
        <table class="table article-detail-table">
            <thead>
                <tr>
                    <th>#</th>
                    {{-- <th> Name</th> --}}
                    {{-- <th>Article Title</th> --}}
                    <th>Description</th>
                    {{-- <th>Article Type</th>
                    <th>Created By</th> --}}
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
      </div>

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
     
      var article_id= {!! $id !!};
    
        $(document).ready(function() {
            // $.toaster({ message : 'fhdh' , priority : 'success' });
           $('#help-center2').show();
		var suc_mes="{{ session('success') }}";
		if(suc_mes!=""){  toastr.success(suc_mes);	}
		
		var err_mes="{{ session('danger') }}";
		if(err_mes!=""){  toastr.error(err_mes);	}
	
		// var table = $('.article-history').DataTable({
		// 	processing: true,
		// 	serverSide: true,

		// 	ajax:
		// 	{
		// 		url:"{{ route('list-more-article-page-data')}}",
		// 		data: function (data) 
		// 		 {
		// 		    data.id = article_id;
		// 		 },
		// 	},
			
		// 	columnDefs:[
		// 			  {"width":"50px","targets":0},
		// 		],
		
		// 	columns: [
		// 		{data:'id' },
		// 		{data: 'name'},
		// 		// {data: 'article_title'},
		// 		{data: 'description'},
		// 		// {data: 'article_type'},
		// 		// {data: 'created_by'},
		// 		{data: 'status'},
		// 		{data: 'action'},
		// 	],
			
		// });


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
            })

            $(document).on('click','.deleteArticle',function () {
              
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
        //     $(document).on('click','.deleteATopic',function () {
              
        //       $('#deleteModal').modal('show');
        //       $('#article_id').val($(this).data('id'))
        //       $(document).on('click','.deletebtn',function () {
        //           $('.deletebtn').attr('disabled',true);
        //           $.ajax({
        //               type:'POST',
        //               url:"{{ route('article-topic-delete') }}",
        //               data:{
        //                       "_token": "{{ csrf_token() }}",
        //                       "id" : $('#article_id').val()
        //                   },
        //               success:function(data) {
        //                   table.ajax.reload();
        //                   $('#deleteModal').modal('hide');
        //                   if (data.status == 1) {
        //                       toastr.success(data.message);
        //                   }else{
        //                       toastr.error(data.message);
        //                   }
        //               }
        //           });
        //       })
        //       $(document).on('click','.cancelbtn',function () {
        //           $('#deleteModal').modal('hide');
        //       })
        //   })
          $(document).on('click','.deleteATopic',function(){
                $.ajax({
                    type:'POST',
                    url:"{{ route('article-topic-delete') }}",
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
                            // $('.article-detail-table').DataTable().ajax.reload();
                            toastr.success(data.message);
                        }else{
                            toastr.error(data.message);
                        }
                    }
                });
            });

            // $(document).on('click','.deleteArticleDetails',function () {
            //     $('#deleteModal').modal('show');
            //     $('#article_id').val($(this).data('id'))
            //     $(document).on('click','.deletebtn',function () {
            //         $('.deletebtn').attr('disabled',true);
            //         $.ajax({
            //             type:'POST',
            //             url:"{{ route('article-details-delete') }}",
            //             data:{
            //                     "_token": "{{ csrf_token() }}",
            //                     "id" : $('#article_id').val()
            //                 },
            //             success:function(data) {
            //                 table.ajax.reload();
            //                 $('#deleteModal').modal('hide');
            //                 if (data.status == 1) {
            //                     toastr.success(data.message);
            //                 }else{
            //                     toastr.error(data.message);
            //                 }
            //             }
            //         });
            //     })
            //     $(document).on('click','.cancelbtn',function () {
            //         $('#deleteModal').modal('hide');
            //     })
            // })
         });
        //  $(document).on('click','#log-tab',function(){
           
           $('#help-center1').hide();
           var table = $('.article-detail-table').DataTable({
			processing: true,
			serverSide: true,

			ajax:
			{
				url:"{{ route('list-article-details-page-data')}}",
				data: function (data) 
				 {
				    data.id = article_id;
				 },
			},
			
			columnDefs:[
					  {"width":"50px","targets":0},
				],
		
			columns: [
				{data:'id' },
				// {data: 'name'},
				// {data: 'article_title'},
				{data: 'description'},
				// {data: 'article_type'},
				// {data: 'created_by'},
				{data: 'status'},
				{data: 'action'},
			],
			
		});
           $('#help-center2').show();
         
        //  })
        //  $(document).on('click','#l-activity-tab',function(){
        //     $('#help-center2').hide();
        //     $('#help-center1').show();
        //     // $('.article-history').DataTable().ajax.reload();
        //  });
    </script>
@endsection
@endsection
