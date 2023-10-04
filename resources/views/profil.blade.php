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
                    <form action="{{ route('profil.edit', auth()->user()->id) }}" method="POST"></form>
                    <div class="card-body">
                        <h4 class="card-title py-1 mb-4">Form Edit Profile</h4>
                        <div class="mb-4 row">
                            <label class="col-3 col-form-label required">Nama Lengkap</label>
                            <div class="col">
                                <input type="text" class="form-control" name='nama'
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label class="col-3 col-form-label required">Email</label>
                            <div class="col">
                                <input type="email" class="form-control" name='email'
                                    placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label class="col-3 col-form-label required">No Handphone</label>
                            <div class="col">
                                <input type="text" class="form-control" name='no_hp'
                                    placeholder="Masukkan No Handphone">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label class="col-3 col-form-label required">No Rekening</label>
                            <div class="col">
                                <input type="text" class="form-control" name='no_rekening'
                                    placeholder="Masukkan No Rekening">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
