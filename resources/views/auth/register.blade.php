@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text"
                                    class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                    value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telp" class="col-md-4 col-form-label text-md-right">{{ __('Telpon') }}</label>

                            <div class="col-md-6">
                                <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror"
                                    name="telp" value="{{ old('telp') }}" required autocomplete="telp" autofocus>

                                @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_user"
                                class="col-md-4 col-form-label text-md-right">{{ __('Jenis User') }}</label>

                            <div class="col-md-6">
                                <select id="jenis_user" class="form-control @error('jenis_user') is-invalid @enderror"
                                    name="jenis_user" required autocomplete="jenis_user" autofocus>
                                    <option disabled selected>Pilih Jenis User</option>
                                    <option value="2" {{old('jenis_user')==2?'selected':''}}>Perusahaan</option>
                                    <option value="3" {{old('jenis_user')==3?'selected':''}}>Mahasiswa</option>
                                </select>

                                @error('jenis_user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row div-company">
                            <label for="nama_company"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nama Company') }}</label>

                            <div class="col-md-6">
                                <input id="nama_company" type="text"
                                    class="form-control input-company @error('nama_company') is-invalid @enderror" name="nama_company"
                                    value="{{ old('nama_company') }}" required autocomplete="nama_company" autofocus>

                                @error('nama_company')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row div-company">
                            <label for="nama_owner"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nama Owner') }}</label>

                            <div class="col-md-6">
                                <input id="nama_owner" type="text"
                                    class="form-control input-company @error('nama_owner') is-invalid @enderror" name="nama_owner"
                                    value="{{ old('nama_owner') }}" required autocomplete="nama_owner" autofocus>

                                @error('nama_owner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row div-company">
                            <label for="deskripsi"
                                class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-6">
                                <textarea id="deskripsi" type="text"
                                    class="form-control input-company @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                    required autocomplete="deskripsi"
                                    autofocus>{{ old('deskripsi') }}</textarea>

                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row div-student">
                            <label for="fakultas"
                                class="col-md-4 col-form-label text-md-right">{{ __('Fakultas') }}</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="text"
                                    class="form-control input-student @error('fakultas') is-invalid @enderror" name="fakultas"
                                    value="{{ old('fakultas') }}" required autocomplete="fakultas" autofocus>

                                @error('fakultas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row div-student">
                            <label for="jurusan"
                                class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text"
                                    class="form-control input-student @error('jurusan') is-invalid @enderror" name="jurusan"
                                    value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>

                                @error('jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/theme-notika/js/vendor/jquery-1.12.4.min.js"></script>
<script>
    $(function() {
        $(".div-company").hide();
        $(".div-student").hide();
        if('{{old('jenis_user')}}'=='2'){
            $(".div-company").show();
        }else if('{{old('jenis_user')}}'=='3'){
            $(".div-student").show();
        }
        $("#jenis_user").change(function(){
            if($(this).val() == 2){
                $(".div-company").show();
                $(".div-student").hide();
                $(".input-company").attr("disabled",false);
                $(".input-student").attr("disabled",true);
            }else{
                $(".div-company").hide();
                $(".div-student").show();
                $(".input-company").attr("disabled",true);
                $(".input-student").attr("disabled",false);
            }
        });
    })
</script>
@endsection