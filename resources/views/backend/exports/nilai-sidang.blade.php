<table>
  <thead>
  <tr>
      <th style="width: 100px;">NIM</th>
      <th style="width: 250px;">Nama Mahasiswa</th>
      <th style="width: 500px;">Judul</th>
      <th style="width: 500px;">Title</th>
      <th style="width: 100px;">PBB 1</th>
      <th style="width: 100px;">PBB 2</th>
      <th style="width: 100px;">PUJ 1</th>
      <th style="width: 100px;">PUJ 2</th>
      <th style="width: 100px;">Tanggal penilaian</th>
      <th style="width: 100px;">Nilai akhir</th>
      <th style="width: 100px;">Catatan</th>
  </tr>
  </thead>
  <tbody>
  @foreach($items as $item)
      <tr>
          <td>{{ $item->sidang->mahasiswa->nim }}</td>
          <td>{{ $item->sidang->mahasiswa->nama }}</td>
          <td>{{ $item->sidang->judul_indo }}</td>
          <td>{{ $item->sidang->judul_inggris }}</td>
          <td>{{ \App\Models\Dosen::where(['id' => $item->sidang->pembimbing1_id])->pluck('kode')->first() }}</td>
          <td>{{ \App\Models\Dosen::where(['id' => $item->sidang->pembimbing2_id])->pluck('kode')->first() }}</td>
          <td>{{ \App\Models\Dosen::where(['id' => $item->sidang->penguji1_id])->pluck('kode')->first() }}</td>
          <td>{{ \App\Models\Dosen::where(['id' => $item->sidang->penguji2_id])->pluck('kode')->first() }}</td>
          <td>{{ $item->tanggal_penilaian }}</td>
          <td>{{ $item->nilai_akhir }}</td>
          <td>{{ $item->catatan }}</td>
      </tr>
  @endforeach
  </tbody>
</table>