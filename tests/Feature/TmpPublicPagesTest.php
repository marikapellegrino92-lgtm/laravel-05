<?php

it('renders the public blade pages', function (string $url) {
    $this->get($url)->assertOk();
})->with(['/', '/contattaci']);

it('posts the contact form and redirects back', function () {
    $this->post(route('submit'), [
        'name' => 'Mario',
        'email' => 'mario@example.com',
        'message' => 'Ciao',
    ])->assertRedirect();
});
