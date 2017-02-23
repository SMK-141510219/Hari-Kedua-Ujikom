@extends('layouts.app')
@section('content')
<h1>Tambah Data</h1>
{!!Form::open(['url'=>'penggajian'])!!}
<div class="form-group">
	{!!Form::label('tunjangan','Tunjangan pegawai id:')!!}
	{!!Form::text('tunjangan_pegawai_id',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('jumlah',Jumlah jam lembur :')!!}
    {!!Form::text('jumlah_jam_lembur',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('jumlah','Jumlah uang lembur :')!!}
   {!!Form::text('jumlah_uang-lembur',null,['class'=>'form-control'])!!}	
</div>
<div class="form-group">
   {!!Form::label('gaji','Gaji pokok :')!!}
   {!!Form::text('gaji_pokok',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('total','Total gaji :')!!}
   {!!Form::text('total_gaji',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('tanggal','Tanggal pengambilan :')!!}
   {!!Form::text('tanggal_pengambilan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('status','Status pengambilan :')!!}
   {!!Form::text('status_pengambilan',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
   {!!Form::label('petugas','Petugas penerima :')!!}
   {!!Form::text('petugas_penerima',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
   {!!Form::submit('Save',['class'=>'btn btn-primary form-control'])!!}
</div>
    {!!Form::close()!!}
@stop