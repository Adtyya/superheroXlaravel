@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
       <div class="row">
           <div class="col-md-8">
               <form action="/skill" method="POST">
                @csrf
                   <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($lists as $list)
                        <option value="{{$list->name}}">{{$list->name}}</option>
                        @endforeach
                      </select>
                   </div>
                    <button type="submit" class="btn btn-primary">Tambah superhero</button>
                    <a href="/" class="btn btn-primary">Kembali</a>
               </form>
           </div>
       </div>
    </div>
@endsection