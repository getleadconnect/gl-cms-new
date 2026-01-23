@extends('app.design')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Add New Section</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Add Section</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form action="{{ route('store-article-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="article_type">Section Category</label>
                                        <select class="form-control" name="article_type" id="article_type">
                                            <option value="">Select Section Category</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->slug }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Section Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_title"> Title</label>
                                    <input type="text" class="form-control" id="article_title" name="article_title"
                                        placeholder="article_title" required>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_description">Article Description</label>
                                    <textarea class="form-control" id="article_description" name="article_description"></textarea>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_title">Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="icon" >
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="article_images"> Image</label>
                                    <input type="file" class="form-control" id="article_images" name="article_images[]" multiple>
                                </div>
                                @error('images')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div> --}}
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="image-box-div" style="padding-top: 35px; margin-bottom: 15px;">
                                <label for="preview-image-before-upload">Article Image</label>
                                <img src="#" style="width: 200px; height:200px; border: 1px solid black"
                                    id="preview-article-image-before-upload">
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Add Section</button>
                </form>
            </li>
        </ul>
    </div>

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({
                height: '200',
            });
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
