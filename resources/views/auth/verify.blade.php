<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vérifiez votre adresse e-mail</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                       </div>
                   @endif
                   <a href="{{ url('/reset-password/'.$token) }}">Cliquez ici</a>
               </div>
           </div>
       </div>
   </div>
</div>
