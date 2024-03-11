@extends('layouts.logout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                        <label for="over_name" class="col-md-4 col-form-label text-md-right">姓</label>
                            <input id="over_name" type="text" class="form-control @error('over_name') is-invalid @enderror" name="over_name" value="{{ old('over_name') }}" required autocomplete="over_name" autofocus>
                            @error('over_name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="under_name" class="col-md-4 col-form-label text-md-right">名</label>
                            <input id="under_name" type="text" class="form-control @error('under_name') is-invalid @enderror" name="under_name" value="{{ old('under_name') }}" required autocomplete="under_name">
                            @error('under_name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-md-4 col-form-label text-md-right">ユーザーネーム</label>
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="mail_address" class="col-md-4 col-form-label text-md-right">メールアドレス</label>
                                <input id="mail_address" type="mail_address" class="form-control @error('mail_address') is-invalid @enderror" name="mail_address" value="{{ old('mail_address') }}" required autocomplete="mail_address">
                                @error('mail_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード確認</label>
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                @error('password__confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>

                                <button type="submit" class="btn btn-primary">登録
                                </button>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
