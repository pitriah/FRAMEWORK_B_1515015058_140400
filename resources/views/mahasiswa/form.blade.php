<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Masukan Nama"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"Masukan NIM"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Masukan Alamat"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::text('password',null,['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div>