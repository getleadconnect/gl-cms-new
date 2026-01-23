@extends('app.design')
@section('css')
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Edit Client</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Edit Client</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('update.client-page') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $client->id }}" name="client_id">
                            <div class="form-row row row-box">
                                <div class="col-md-8">
                                    <div class="form-group col-md-12">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $client->name }}" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="image">Image</label>(100px x 100px)
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="image-box-div">
                                        <img src="{{ url('Clients/' . $client->image) }}"
                                            style="width: 200px; height:200px; border: 1px solid black"
                                            id="preview-image-before-upload">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Client</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>

@section('script')
    <script>
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
