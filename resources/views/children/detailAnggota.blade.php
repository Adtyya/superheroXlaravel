@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="col-md-12">
            <div class="row">
                <form action="/list/{{$detail->id}}" method="POST">
                    @csrf
                    @method("PATCH")
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td class="col-md-2">id</td>
                            <td>{{$detail->id}}</td>
                          </tr>
                          <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="name" value="{{$detail->name}}" class="form-control">
                            </td>
                          </tr>
                          <tr>
                            <td>Jenis kelamin</td>
                            <td>  
                                <select class="form-select" aria-label="Pilih jenis kelamin" name="jkelamin">
                                    <option value="{{$detail->jkelamin}}" selected>{{$detail->jkelamin}}</option>
                                    @if($detail->jkelamin === 'laki-laki')
                                    <option value="perempuan">Perempuan</option>
                                    @else
                                    <option value="laki-laki">Laki-laki</option>
                                    @endif
                                </select>
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
                        <th>Nama skill</th>
                        <th><a href="#" class="btn btn-primary">Tambah skill</a></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Terbang</td>
                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection