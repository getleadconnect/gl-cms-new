@extends('app.design')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Add New Testimonial</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Add Testimonial</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <form action="{{ route('store-testimonial-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row row row-box">
                        <div class="col-md-8">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation"
                                    placeholder="Designation , Company" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-box-div">
                                <img src="{{ asset('images/no-image.png')}}" style="width: 200px; height:200px; border: 1px solid #b9b2b2"
                                    id="preview-image-before-upload">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="feInputAddress2">Description</label>
                        <textarea class="summernote" name="description" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
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

