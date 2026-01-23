@extends('app.design')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('code')
@if (session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Edit  Topic</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Edit Topics</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form  id="articleImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4">

                        <label for="image">Upload Image</label>
                          <input type="file" class="form-control" id="image" name="image">
                             @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            <p id="copyText"> 

                            <input type="text" class="form-control"  id="myInput" disabled>
                            <a type="button" onclick="myFunction()" class="btn btn btn-rounded "  title="Copy">
								<span class="material-icons">
                                    content_copy
                                 </span></a>
                            <!-- The button used to copy the text -->
                            {{-- <button  onclick="myFunction()">Copy path for image upload</button> --}}
                            </p>
                            {{-- <div class="image-box-div mt-2" style="width:75%;margin-bottom: 15px;">
                                <label for="preview-image-before-upload">Upload Image</label>
                                <img src="{{asset('images/no-image.png')}}" style="width: 100%;border: 1px solid #d4d4d4"
                                    id="preview-image-before-upload">
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
                <form action="{{ route('update-article-topic-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="detail_id" id="detail_id" value="{{ $details->id }}">
                    <input type="hidden" name="article_id" id="article_id" value="{{ $articles->id }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="article_type">Section Category</label>
                                        <input type="text" class="form-control" value="{{ $articles->articleType->name }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ $details->title }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{ $details->title }}">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div> --}}
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="note">Note</label>
                                    <textarea class="form-control" id="note" name="note">{{ $details->note }}</textarea>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    <textarea class="editor" name="description" id="editor" required>{{ $details->description }}</textarea>
                                </div>
                            </div>
                           
                          
                        </div>
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Update </button>
                </form>
            </li>
        </ul>
    </div>

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>

    <script type="text/javascript">
         $(document).ready(function() {
            $('#copyText').hide();
        //     $('.summernote').summernote({
        //         height: '200',
        //     });
        });

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

        $(document).on('submit', '#articleImage', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{url('admin/store-article-details-image')}}',
                type: 'POST',
                 dataType: 'JSON',
                data: new FormData(this),
                 contentType: false,
                 processData: false,
            }).done(function (res) {
                console.log('path');console.log(res);
                
                 var path='https://getleadcrm.com/Article/' + res.data ;
                 console.log(path);
                 $('#myInput').val(path);
                 $('#copyText').show();
              
            }).fail(function () {
            }).always(function (com) { 
            });
        });

        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            // alert("Copied the text: " + copyText.value);
        }

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
