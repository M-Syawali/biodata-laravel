<div>
    <h1>Data Peserta Didik</h1>
<table width=100% border="1" cellpadding="5" cellspacing="0">
 <tr>
   <th>NO</th>
   <th>NIS</th>
   <th>NAMA LENGKAP</th>
   <th>L/P</th>
    <th>NILAI</th>
 </tr>
 @foreach ($pesertaM as $peserta)
   <tr>
     <td>{{ $loop->iteration }}</td>
     <td>{{ $peserta->nis }}</td>
     <td>{{ $peserta->namalengkap }}</td>
     <td>{{ $peserta->jk }}</td>
     <td>{{ $peserta->nilai }}</td>
   </tr>
 @endforeach
</table>
</div>