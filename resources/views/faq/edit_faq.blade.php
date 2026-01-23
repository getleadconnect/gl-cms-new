@extends('app.design')
@section('css')
@endsection

@section('code')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title heading">Edit FAQ</h3>
        </div>
    </div>
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Edit FAQ</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('update-faq-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $faq->id }}" name="faq_id">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="question">Question</label>
                                    <input type="text" class="form-control" id="question" value="{{ $faq->question }}" name="question"
                                        placeholder="Enter Question here">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="answer">Answer</label>
                                    <textarea name="answer" class="form-control widthClass" placeholder="Enter Answer here">{{ $faq->answer }}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update FAQ</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>

@section('script')
@endsection
@endsection
