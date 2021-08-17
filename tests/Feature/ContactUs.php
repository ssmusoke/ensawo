<?php

use App\Mail\ContactUs;
use App\Models\User;

beforeEach(function(){
    Mail::fake();
    $this->faker = Faker\Factory::create();
    $this->contact_data = [
        'name' => $this->faker->name,
        'email' => $this->faker->email,
        'message' => $this->faker->paragraph,
        'subject' => $this->faker->sentence
    ];
});
it('has contactus page', function () {
    $response = $this->get('/contact-us');
    $response->assertStatus(200);
});

it('can send contact email when logged in', function () {

    $response = $this->actingAs(User::factory()->create())->post('/contact-us-action', $this->contact_data);

    $response->assertStatus(302);
    $response->assertRedirect('/dashboard');
    Mail::assertSent(ContactUs::class);
});

it('can send contact email when not logged in', function () {
    $response = $this->post('/contact-us-action', $this->contact_data);
    $response->assertStatus(302);
    $response->assertRedirect('/');
    Mail::assertSent(ContactUs::class);
});