@extends('app.design')
@section('css')
@endsection
@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Add New Topic</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Add Topics</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form action="{{ route('store-article-details-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="article_id" id="article_id" value="{{ $articles->id }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="article_type">Section Category</label>
                                        <input type="text" class="form-control" value="{{ $articles->articleType->name }}" disabled>
                                    </div>
                                </div>
                            
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Section Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $articles->article_name }}" disabled>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_title">Section Title</label>
                                    <input type="text" class="form-control" id="article_title" name="article_title"
                                        placeholder="article_title" value="{{ $articles->article_titile }}" disabled>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="Article_description">Section Description</label>
                                    <textarea class="form-control" id="Article_description" name="Article_description" disabled>{{ $articles->article_description }}</textarea>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>

							</div>
							
						<div class="col-md-4">

                            <label for="image">Image</label>
                              <input type="file" class="form-control" id="image" name="image">
                                 @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <div class="image-box-div mt-2" style="width:75%;margin-bottom: 15px;">
                                    <label for="preview-image-before-upload">Image</label>
                                    <img src="{{asset('images/no-image.png')}}" style="width: 100%;border: 1px solid #d4d4d4"
                                        id="preview-image-before-upload">
                                </div>

                        </div>
						</div>
						
                        {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="note">Note</label>
                                    <textarea class="form-control" id="note" name="note"></textarea>
                                </div>
                        </div> --}}
                        <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    {{-- <textarea  class="form-control" name="description" value=@include('article.help_center_temp')></textarea> --}}
                                    <textarea class="editor" name="description" id="editor" ></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="description">Sub Id</label>
                                    <input type="text" class="form-control" name="sub_id" id="sub_id">
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="description">Sub Heading</label>
                                    <select name="sub_head_id" class="form-control">
                                        <option></option>
                                        @foreach($sub as $head)
                                        <option value="{{$head->id}}" >{{$head->title}}<option>
                                         @endforeach
                                    </select>
                               
                                </div>
                            </div> --}}

                    <button type="submit" class="btn btn-primary">Add Topic</button>
                </form>
            </li>
        </ul>
    </div>

@section('script')
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>

    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('.summernote').summernote({
        //         height: '200',
        //     });
        // });

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

        // $('#article_images').change(function() {

        //     let reader = new FileReader();

        //     reader.onload = (e) => {
        //         $('#preview-article-image-before-upload').attr('src', e.target.result);
        //     }

        //     reader.readAsDataURL(this.files[0]);

        // });

        $('#image').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
@endsection
@endsection
