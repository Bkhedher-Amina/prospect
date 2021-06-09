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
                    <h3> Activité des utilisateurs Connecté</h3>
                    <p class="text-subtitle text-muted"> liste d'activité des utilisateurs Connecté</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">tableau de bord</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Activitée des utilisateurs Connecté</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Tableau de données de connexion
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom Et Prénom</th>
                                <th>Address Email</th>
                                <th>Numéro portable</th>
                                <th>Status</th>
                                <th>Role </th>
                                <th>Modifier</th>
                                <th>Date Temp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activityLog as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $item->user_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->role_name }}</td>
                                    <td>{{ $item->modify_user }}</td>
                                    <td>{{ $item->date_time }}</td>
                                </tr>
                            @endforeach
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
