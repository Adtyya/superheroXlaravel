@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="col-md-12">
            <div class="row">
                <form action="/skill/{{$skill->id}}" method="POST">
                    @csrf
                    @method("PATCH")
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td class="col-md-2">id</td>
                            <td>{{$skill->id}}</td>
                          </tr>
                          <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="name" value="{{$skill->name}}" class="form-control">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <button type="submit" class="btn btn-primary mb-4">Update data</button>
                </form>
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>No</td>
                        <th>Nama superhero</th>
                        <th><a href="/skill/tambah/hero/{{$skill->id}}" class="btn btn-primary">Tambah superhero</a></th>
                    </tr>
                    @foreach ($skill->anggota as $anggota)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$anggota->name}}</td>
                        <td><a href="/remove/{{$anggota->id}}/{{$skill->id}}" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection