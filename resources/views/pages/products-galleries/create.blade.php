@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('products-galleries.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="products_id" class="form-control" id="name" @error('products_id') is-invalid @enderror>
                        
                        @foreach ($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                    @error('products_id')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-control-label">Photo Barang</label>
                    <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" value="{{old('quantity')}}" accept="image/*">
                    @error('photo')
                    <div class="text-muted">{{$message}}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label>
                    <br>
                    <label >
                        <input type="radio" name="is_default" id="is_default" class="form-control @error('is_default') is-invalid @enderror" value="1"> Ya
                    </label>
                    &nbsp;
                    <label >
                        <input type="radio" name="is_default" id="is_default" class="form-control @error('is_default') is-invalid @enderror" value="0"> Tidak
                    </label>
                    @error('is_default')
                    <div class="text-muted">{{$message}}</div>
                @enderror
                </div>
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Barang
                </button>
            </form>
        </div>
    </div>
@endsection