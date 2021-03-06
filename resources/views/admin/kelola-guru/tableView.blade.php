@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Data Guru</div>

                <div class="panel-body">

                    <div class="table-responsive">
                        @if(count($guru) > 0)
                        <table class="table table-bordered" id="tableGuru">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no=1; ?>
                                    @foreach($guru as $g)
                                        <tr>
                                            <td><?php echo $no;$no++; ?></td>
                                            <td>{{$g->nip}}</td>
                                            <td>{{$g->nama}}</td>
                                            <td>
                                                <a href="{{url('/kelola-guru/show', base64_encode($g->id_guru))}}" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="{{url('/kelola-guru/edit', base64_encode($g->id_guru))}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <button type="button" class="btn btn-danger remove" href="{{url('/kelola-guru/delete', base64_encode($g->id_guru))}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>

                        @else
                            <strong><p>Data tidak tersedia.</p></strong>
                        @endif
                    </div>
                </div>
                <div class="panel-footer pull-right">
                    <button id="export" class="btn btn-success">Export Data Guru</button>
                    <a href="{{ route('daftar-guru') }}" class="btn btn-success">Daftarkan Guru</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready(function(){

  var url = "{{ route('chart-guru') }}";
  var label;
  var daftarChart = ['ujian1', 'ujian2', 'ujian3'];
  // console.log(daftarChart);
  $.get(url, function(response){
    // console.log(response);
    // response.forEach(function(data){
      for(var i=0, len = response.length; i<len;i++) {
      // Chart 1
      var nama_kelas = [];
      
      var nilai = [];

      // console.log(data);

      response[i].forEach(function(realData){
        // console.log(realData);
        nama_kelas.push(realData.nama_kelas);
        label = realData.judul_ujian;
        nilai.push(realData.nilai_rata_rata);
      });

      var ctx = document.getElementById(daftarChart[i]).getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:nama_kelas,
            datasets: [{
              label: label,
              data: nilai,
              borderWidth: 1,
              backgroundColor: 'lightblue'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
      });
      // console.log('judul-ujian-'+i);
      $('#judul-ujian-'+(i+1)).text(label);
    }

  });
});

$('#export').click(function() {
    swal({
      title: 'Export Data ?',
      text: 'Data yang di Export akan otomatis terdownload',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
    }).then((data) => {
        window.location = '{{ route('export-guru') }}';
    })
});
</script>
@endsection