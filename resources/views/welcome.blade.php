<x-layout>

  <div class="container-fluid py-5">
    @if (session()->has('EmailSent'))
      <div class="alert alert-success">
        {{ session('EmailSent') }}
       
      </div>
       @endif
    @if (session()->has('Emailerror'))
      <div class="alert alert-danger">
        {{ session('Emailerror') }}
      </div>
       @endif
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="text-center text-white display-4 fw-bold">
          SAVE THE DATE 
        </h1>
      </div>
    </div>
  </div>

</x-layout>
