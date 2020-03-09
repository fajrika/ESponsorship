@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Konfirmasi Admin') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{-- {{ __('Menunggu Konfirmasi dari Admin.') }} --}}
                        </div>
                    @endif

                    {{ __('Menunggu Konfirmasi dari Admin.') }}
                    <br>
                    {{-- {{ __('If you did not receive the email') }}, --}}
                    <form class="d-inline" method="POST" action="{{ route('login') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Login') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
