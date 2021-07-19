@extends('layouts.master')

@section('title-page')
<img src="assets/images/dashboard.png" width="20" height="20" class="icon-img-title" alt=""> 
<h4>Played</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Played</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Add Played</h5></div>

            <form action="{{ route('admin.played') }}" method="post" class="form-cs">
                @csrf @method('post')

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Artist Name</label>
                    <select name="artist_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($artist as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Track Name</label>
                    <select name="track_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($track as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Album Name</label>
                    <select name="album_id" class="form-control-cs">
                        <option>- Please Select -</option>
                        @foreach ($album as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="card-footer-cs">
                    <button class="btn-cs btn-cs-success">Simpan</button>
                    <button class="btn-cs btn-cs-danger">Batal</button>
                </div>
            </form>

        </div>
    </div>
</div>    
@endsection