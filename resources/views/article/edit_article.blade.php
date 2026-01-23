@extends('app.design')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Add New Article</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Add Article</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form action="{{ route('update-article-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="article_id" id="article_id" value="{{ $articles->id }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="article_type">Article Type</label>
                                        <select class="form-control" name="article_type" id="article_type">
                                            @foreach ($types as $type)
                                                <option value="{{ $type->slug }}" @if($type->slug == $articles->slug){! selected !}@endif>{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
								</div>
                                
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name" value="{{ $articles->article_name }}" required>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_title">Article Title</label>
                                    <input type="text" class="form-control" id="article_title" name="article_title"
                                        placeholder="article_title" value="{{ $articles->article_title }}" required>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_description">Article Description</label>
                                    <textarea class="editor" name="article_description" id="editor">{{ $articles->article_description }}</textarea>
                                </div>
                            </div> --}}
                            <div class="row">
                               
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_title">Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="icon" value="{{ $articles->icon }}" >
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-4">
                                    <label for="article_images">Article Image</label>
                                    <input type="file" class="form-control" id="article_images" name="article_images[]" multiple>
                                @error('images')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror --}}
						
						
						   {{-- <div class="image-box-div mt-3" style="width:75%; margin-bottom: 15px;"> --}}
                                {{-- <img src="{{ url('/Article/'.$articles->article_image) }}" style="width: 100%; border: 1px solid #d4d4d4"
                                    id="preview-article-image-before-upload"> --}}
                                {{-- @foreach($images as $img)   
                                    <img src="{{ url('/Article/'.$img->article_image) }}" style="width: 100%; border: 1px solid #d4d4d4"
                                    id="preview-article-image-before-upload">
                                    <a href="{{url('admin/article-image-delete/'.$img->id)}}" type="button" class="btn btn-danger btn-rounded " data-id="'.$row->id.'" title="Delete">
                                        <i class="material-icons">&#xE872;</i>
                                    </a>
                                @endforeach 
                            </div> --}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update </button>
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


        $('#article_images').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {
                $('#preview-article-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
@endsection
@endsection
