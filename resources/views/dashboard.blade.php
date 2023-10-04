@extends('app')

@section('content')

<main class="content container mx-auto">

    <div class="content-header">
        <h4 class="content-title ~mx-auto">Dashboard</h4>

    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-info me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                               
                                <img src="{{ asset('images/person.png') }}" width="35px" alt="rakamin-logo.png">
                            </div>
                        </div>
                        <div>
                            <div class="mb-1 ">
                                <span class="text-secondary"><b>Saldo</b></span>
                            </div>
                            <span class="h3 mb-0 lh-1">Rp. {{$saldo}},00</span>
                        </div>
                    </div>
                    <div class="card-footer py-3">
                        <a href="" class="text-decoration-none">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-header">
            <h5 class="content-title">Profile User</h5>
            <div class="ms-auto">
                <button class="btn btn-default">Load More</button>
            </div>
        </div>
       
        <div class="card mb-4">
            <table class="table table-striped table-hover mb-1 " >
                <thead >
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">No.Rekening</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->no_hp}}</td>
                        <td>{{$data->no_rekening}}</td>
                    </tr>
                    <!-- Tambahkan baris-baris data lainnya di sini -->
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection

@section('script')
<script>
@if(session()->has('success'))
    alert('{{ session()->get('success') }}')
@endif
</script>
@endsection
