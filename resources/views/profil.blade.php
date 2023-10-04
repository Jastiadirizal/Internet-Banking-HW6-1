@extends('app')

@section('content')

<main class="content container mx-auto">

    <div class="content-header">
        <h4 class="content-title ~mx-auto">Profil User</h4>
    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-5">
                    <form action="{{ route('profil.update') }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title py-1 mb-4">Form Edit Profile</h4>
                            <div class="mb-4 row">
                                <label class="col-3 col-form-label required">Nama Lengkap</label>
                                <div class="col">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name='nama' value="{{ old('nama', $data->nama) }}"
                                        placeholder="Masukkan Nama Lengkap" value="">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-3 col-form-label required">Email</label>
                                <div class="col">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name='email' value="{{ old('email', $data->email) }}"
                                        placeholder="Masukkan Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-3 col-form-label required">No Handphone</label>
                                <div class="col">
                                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                        name='no_hp' value="{{ old('no_hp', $data->no_hp) }}"
                                        placeholder="Masukkan No Handphone">
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-3 col-form-label required">No Rekening</label>
                                <div class="col">
                                    <input type="text" class="form-control @error('no_rekening') is-invalid @enderror"
                                        name='no_rekening' value="{{ old('no_rekening', $data->no_rekening) }}"
                                        placeholder="Masukkan No Rekening">
                                    @error('no_rekening')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('dashboard.index') }}"><button type="button" class="btn btn-default">Cancel</button></a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')
<script>
</script>
@endsection
