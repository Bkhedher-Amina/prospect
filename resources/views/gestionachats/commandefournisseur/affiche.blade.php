@extends('layouts.master')
@section('menu')
@extends('sidebar.Dashboard')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Liste Des Commandes Fournisseur </h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Tableau De bord</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste Des Commandes Fournisseur</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Tableau des données sur les Commandes Fournisseur
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th> Date</th>
                                <th>Client</th>
                                <th>Net Ht</th>
                                <th>Total TVA</th>
                                <th>Total TTC</th>
                                <th>Net à payer</th>

                                <th class="text-center">Modifier</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td class="id"></td>
                                    <td class="cin"></td>
                                    <td class="name"></td>
                                    <td class="name">
                                    </td>
                                    <td class="email"></td>
                                    <td class="phone_number"></td>

                                    <td class="status"><span class="badge bg-success"></span></td>

                                    <td class="status"><span class="badge bg-danger"></span></td>

                                    <td class="status"><span class="badge bg-danger"></span></td>

                                    <td class="role_name"><span  class="badge bg-success"></span></td>

                                    <td class="role_name"><span  class="badge bg-info"></span></td>

                                    <td class="role_name"><span  class=" badge bg-warning"></span></td>


                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2021 &copy; Web Prospect</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="https://www.webprospect.tn/">Web Prospect</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection
