@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
       <div class="row">
           <div class="col-md-8">
               <form action="/skill" method="POST">
                @csrf
                   <div class="mb-3">
                       <label for="exampleFormControlInput1" class="form-label">Nama skill</label>
                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Uang tidak habis-habis" name="name">
                   </div>
                    <button type="submit" class="btn btn-primary">Tambah skill</button>
                    <a href="/" class="btn btn-primary">Kembali</a>
               </form>
           </div>
       </div>
    </div>
@endsection