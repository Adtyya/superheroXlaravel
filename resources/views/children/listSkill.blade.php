@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <h3>Daftar skill</h3>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                            <input type="search" id="form" class="form-control">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($skills as $skill)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$skill->name}}</td>
                        <td class="d-flex flex-row">
                            <a href="/skill/{{$skill->id}}" class="btn btn-primary mx-2">View detail</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection