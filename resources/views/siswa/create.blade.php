@extends('template.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>

              <form action="{{ route('siswa.index')}}" method="POST">
            @csrf
            <div class="form-group">
                    <label for="Nisn">NISN</label>
                    <input type="number" name="nisn" placeholder="Silahkan  Input NISN">
                  </div>
           <div class="form-group">
                    <label for="Nis">NIS</label>
                    <input type="number" name="nis" placeholder="Silahkan  Input NIS ">
                  </div>
            <div class="form-group">
                    <label for="Nama">Nama Siswa</label>
                    <input type="number" name="nama" placeholder="Silahkan  Input NAMA">
                  </div>
            <div class="form-group">
                    <label for="Nama">Nama Siswa</label>
                    <input type="number" name="alamat" placeholder="Silahkan  Input alamat">
                  </div>
            <div class="form-group">
                    <label for="Nama">Nama Siswa</label>
                    <input type="number" name="no_tlp" placeholder="Silahkan  Input no_tlp">
                  </div>
            <div class="form-group">
                <label>Nama Outlet</label>
                <select nama="kelas_id" id="kelas_id">
                 <option value=""disable>Silahkan Pilih Kelas</option>
                @foreach($kelas as $item)
                 <option value=""{{ $item->id}}.">{{ $item->nama_kelas}}</option>
                 @endforeach
                </select>
              </div>
            <div class="form-group">
                <label>Nama Outlet</label>
                <select name="spps_id" id="spps_id">
                 <option value="" disabled>Silahkan Pilih Kelas</option>
                 <option value="2jt">2000000</option>
                 <option value="3jt">300000</option>
                 <option value="4jt">4000000</option>
                 </select>
                 <input type="sumbit" value="simpan">
                 </from>
                 </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              </a>
@endsection