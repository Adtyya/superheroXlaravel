@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
       <div class="row">
           <div class="col-md-8">
               <form action="/list" method="POST">
                @csrf
                   <div class="mb-3">
                       <label for="exampleFormControlInput1" class="form-label">Nama</label>
                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Batman" name="name">
                   </div>
                   <div class="mb-3">
                        <select class="form-select" aria-label="Pilih jenis kelamin" name="jkelamin">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah anggota</button>
                    <a href="/" class="btn btn-primary">Kembali</a>
               </form>
           </div>
       </div>
    </div>
@endsection