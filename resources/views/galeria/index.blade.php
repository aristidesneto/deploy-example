@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h2>Galeria de Fotos</h2>

                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('storage/images/img1.jpg') }}" alt="..." class="img-thumbnail img-reponsive">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('storage/images/img2.jpg') }}" alt="..." class="img-thumbnail img-reponsive">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('storage/images/img3.jpg') }}" alt="..." class="img-thumbnail img-reponsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
