@extends('app.design')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<style>
.note-editable
{
	height:200px;
}
</style>
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Add New blog</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Add blog</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form action="{{ route('store-blog-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="blog_type">Blog Category</label>
                                        <select class="form-control" name="blog_type" id="blog_type">
                                            <option value="">Select Blog Category</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fearured">Featured</label>
                                        <select name="featured" id="featured" class="form-control" required>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
								
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="blog_title">Blog Title</label>
                                    <input type="text" class="form-control" id="blog_title" name="blog_title"
                                        placeholder="blog_title" required>
                                </div>
                            </div>

						 </div>
						<div class="col-md-4">
						
						    <label for="blog_images">Blog Image</label>(1200px x 630px)
                            <input type="file" class="form-control" id="blog_images" name="blog_images">
                                @error('images')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                        	
                            <div class="image-box-div mt-2" style="width:75%;margin-bottom: 15px;">
                                <img src="{{asset('images/no-image.png')}}" style="width:100%;border: 1px solid #d4d4d4"
                                    id="preview-blog-image-before-upload">
                            </div>
                        </div> 
						 
						 
						</div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="blog_description">Blog Description</label>
                                    <textarea class="editor" style="height:150px;" name="description" id="editor"></textarea>
                                </div>
                            </div>
                    <button type="submit" class="btn btn-primary">Add Blog</button>
                </form>
            </li>
        </ul>
    </div>

@section('script')
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor', {
        skin: 'moono',
        enterMode: CKEDITOR.ENTER_BR,
        shiftEnterMode:CKEDITOR.ENTER_P,
        toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
                    { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                    { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
                    { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                    { name: 'links', items: [ 'Link', 'Unlink' ] },
                    { name: 'insert', items: [ 'Image'] },
                    { name: 'spell', items: [ 'jQuerySpellChecker' ] },
                    { name: 'table', items: [ 'Table' ] }
                    ],
        });


        $('#blog_images').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {
                $('#preview-blog-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
@endsection
@endsection
