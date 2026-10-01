<x-layout>
@if (session()->has('EmailSent'))
    <div class="alert alert-success text-center fw-bold">
        {{ session('EmailSent') }}
    </div>
@endif
@if (session()->has('Emailerror'))
    <div class="alert alert-danger text-center fw-bold">
        {{ session('Emailerror') }}
    </div>
@endif
 <div class="container py-5 text-white">

        <h1 class="text-center fw-bold mb-4">
            Contattaci
        </h1>

        <p class="text-center mb-5">
            Compila il form qui sotto per inviarci un messaggio.
        </p>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <form action="{{ route('submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nome</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Messaggio</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>

                    <button class="btn btn-light fw-bold w-100">
                        Invia
                    </button>
                </form>

            </div>
        </div>

    </div>

</x-layout>
