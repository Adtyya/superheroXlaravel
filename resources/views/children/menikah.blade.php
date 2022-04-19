@extends('template.default')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="col-md-12">
            <div class="row">
                <form action="/menikah/skill" method="POST">
                    @csrf
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Suami</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="idHerolaki">
                                    @foreach ($anggota as $list)
                                    @if ($list->jkelamin === 'laki-laki')
                                    <option value="{{$list->id}}">{{$list->name}}</option>
                                    @endif
                                    @endforeach
                                  </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Istri</td>
                            <td>
                                <select class="form-select" aria-label="Default select example" name="idHeroIstri">
                                    @foreach ($anggota as $list)
                                    @if ($list->jkelamin === 'perempuan')
                                    <option value="{{$list->id}}">{{$list->name}}</option>
                                    @endif
                                    @endforeach
                                  </select>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <button type="submit" class="btn btn-primary mb-4">Menikah</button>
                </form>
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>No</td>
                        <th>Skill</th>
                    </tr>
                    @if($skillanak)
                    @forelse ($skillanak as $skill)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$skill->name}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td>Belum menikah</td>
                    </tr>
                    @endforelse
                    @endif
                  </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection