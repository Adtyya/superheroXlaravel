@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <h3>Daftar superhero</h3>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                            <input type="search" id="form" class="form-control">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                  <a href="/downloadpdfhero" class="btn btn-primary">Download PDF</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($lists as $no => $list)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$list->name}}</td>
                        <td>{{$list->jkelamin}}</td>
                        <td>
                          @foreach($list->skills as $skill)
                          <p>{{$skill->name}}</p>
                          @endforeach
                        </td>
                        <td class="d-flex flex-row">
                            <a href="/list/{{$list->id}}" class="btn btn-primary mx-2">View detail</a>
                            <form action="/list/{{$list->id}}" method="POST">
                              @csrf
                              @method("DELETE")
                              <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection