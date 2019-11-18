@extends('base')
@section('konten')
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Kategori
            <a href="{{route('kategori.create')}}" button type="button" class="btn btn-primary" >Tambah</button> </a></div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id_Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id_Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($kategori as $value):
                  <tr>
                    <td width="1">{{$value->id_kategori}}</td>
                    <td>{{$value->nama_kategori}}</td>
                    <td><a href="{{route('kategori.edit', $value->id_kategori)}}"
                      class="btn btn-success btn-sm">edit</a>
                      <form action="{{route('kategori.destroy', $value->id_kategori)}}" method="POST"></form>
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm"
                      type="submit">delete</button>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
 @endsection
