<able> border="1">
<thead>
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($siswa as $siswa)
    <tr>
        <td>({ $loop->iteration })</td>
        <td>({ $siswa->nis })</td>
        <td>({ $siswa->nama })</td>
        <td>({ $siswa->kelas->nama_kelas })</td>
        <td>

    </td>

  </tr>
@endforeach
</tbody>
</able>