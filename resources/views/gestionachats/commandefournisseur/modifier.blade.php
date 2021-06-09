@extends('layouts.master')
@section('menu')
@extends('sidebar.Dashboard')
@endsection
@section('content')
<div id="main">
    <style>
        .avatar.avatar-im .avatar-content, .avatar.avatar-xl img {
            width: 40px !important;
            height: 40px !important;
            font-size: 1rem !important;
        }
        .form-group[class*=has-icon-].has-icon-lefts .form-select {
            padding-left: 2rem;
        }

    </style>

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Commande Fournisseur</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Tableau de Bord</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Commande Fournisseur</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Modifier les Commandes Fournisseur</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data[0]->id }}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Numéro de Fournisseur</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Numéro cin" id="first-name-icon" name="fullName" value="{{ $data[0]->cin }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-lines-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="date" class="form-control"
                                                    id="first-name-icon" name="date" value="{{ $data[0]->date }}">
                                                <div class="form-control-icon">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Client</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="client" id="first-name-icon" name="client" value="{{ $data[0]->client}}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Net Hors Taxe</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" step="0.01" class="form-control"
                                                    placeholder="Net Hors Tax" id="first-name-icon" name="netHt" value="{{ $data[0]->netHt }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-coin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Total taxe de valeur ajoutée"</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control"
                                                    placeholder="Total TVA " name="total_tva" value="{{ $data[0]->total_tva }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-coin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Total Taxe Comprise"</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control"
                                                    placeholder="Total TTC " name="total_ttc" value="{{ $data[0]->total_ttc }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-coin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                               </div>
                              </div>
                              <div class="col-md-4">
                                <label>Net a Payer"</label>
                            </div>
                              <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="number" class="form-control"
                                            placeholder="Net a payer " name="netapayer" value="{{ $data[0]->netapayer }}">
                                        <div class="form-control-icon">
                                            <i class="bi bi-coin"></i>
                                              </div>
                                             </div>
                                            </div>
                                          </div>
                                         </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Mettre à jour</button>
                                        <a  href="{{ route('userManagement') }}"
                                            class="btn btn-light-secondary me-1 mb-1">Retour</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
