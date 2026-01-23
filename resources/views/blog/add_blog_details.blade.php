@extends('app.design')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Add New Blog Detail</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Add Blog Detail</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form action="{{ route('store-blog-details-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="blog_id" id="blog_id" value="{{ $blogs->id }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="blog_type">Blog Type</label>
                                        <input type="text" class="form-control" value="{{ $blogs->blogType->name }}" disabled>
                                    </div>
                                </div>
								<div class="col-md-8">
                                    <div class="form-group">
                                        <label for="name">Blog Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $blogs->blog_name }}" disabled>
                                    </div>
                                </div>
                            </div>
							
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="blog_title">Blog Title</label>
                                    <input type="text" class="form-control" id="blog_title" name="blog_title"
                                        placeholder="Blog Title" value="{{ $blogs->blog_titile }}" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="blog_description">Blog Description</label>
                                    <textarea class="form-control" id="blog_description" name="blog_description" disabled>{{ $blogs->blog_description }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="note">Note</label>
                                    <textarea class="form-control" id="note" name="note"></textarea>
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
                                   <img src="{{asset('images/no-image.png')}}" style="width:100%; border: 1px solid #d4d4d4"
                                        id="preview-image-before-upload">
                                </div>

                        </div>
						</div>						

						<div class="row">
							<div class="form-group col-md-12">
								<label for="description">Description</label>
								<textarea class="summernote" name="description" id="description"></textarea>
							</div>
						</div>

                    <button type="submit" class="btn btn-primary">Add Detail</button>
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
