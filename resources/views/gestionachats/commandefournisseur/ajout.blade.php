@extends('layouts.app')
@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
               <div id="auth-left">
                    <!--<div class="auth-logo">
                        <a href="index.html"><img src="{{ URL::to('assets/images/logo/prospect.png') }}" alt="Logo"></a>
                    </div> -->
                    <h1 class="auth-title">Nouvelle Commande Fournisseur </h1>
                    <form method="POST" action="{{ route('gestionachat/ajouterCommandefournisseur/enregistrer') }}" class="md-float-material" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  class="form-control form-control-lg @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" placeholder="Numéro de Fournisseur ">
                            <div class="form-control-icon">
                                <i class="bi bi-telephone"></i>
                            </div>
                            @error('numero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="date" class="form-control form-control-lg @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" >

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('client') is-invalid @enderror" name="client" value="{{ old('client') }}" placeholder="Nom client">
                            <div class="form-control-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            @error('client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" step="0.01" class="form-control form-control-lg @error('netHt') is-invalid @enderror" name="netHt" value="{{ old('netHt') }}" placeholder="Net Hors taxe">
                            <div class="form-control-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            @error('netHt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" step="0.01" class="form-control form-control-lg @error('total_tva') is-invalid @enderror" name="netHt" value="{{ old('total_tva') }}" placeholder="Total taxe de valeur ajouté">
                            <div class="form-control-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            @error('total_tva')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" step="0.01" class="form-control form-control-lg @error('total_ttc') is-invalid @enderror" name="total_ttc" value="{{ old('total_ttc') }}" placeholder="Total taxe comprise">
                            <div class="form-control-icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            @error('total_ttc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" step="0.01" class="form-control form-control-lg @error('netapayer') is-invalid @enderror" name="netapayer" value="{{ old('netapayer') }}" placeholder="Net à payer">
                            <div class="form-control-icon">
                                <i class="bi bi-coin"></i>
                            </div>
                            @error('netapayer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Ajouter</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
@endsection
