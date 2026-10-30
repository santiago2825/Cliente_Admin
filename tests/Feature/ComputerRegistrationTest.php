<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ComputerRegistrationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        putenv('URL_SERVE_API=https://api.test');
        $_ENV['URL_SERVE_API'] = 'https://api.test';
        $_SERVER['URL_SERVE_API'] = 'https://api.test';
    }

    protected function tearDown(): void
    {
        putenv('URL_SERVE_API');
        unset($_ENV['URL_SERVE_API'], $_SERVER['URL_SERVE_API']);

        parent::tearDown();
    }

    public function test_successful_registration_sends_only_computer_fields_and_returns_to_list(): void
    {
        Http::fake([
            'https://api.test/computer' => Http::response(['id' => 1], 201),
        ]);

        $response = $this->post(route('computer.store'), [
            '_token' => 'csrf-token',
            'number' => '27',
            'brand' => 'Dell',
            'environment_id' => '4',
        ]);

        $response->assertRedirect(route('computer.index'));
        $response->assertSessionHas('success', 'Computador registrado correctamente.');

        Http::assertSent(function ($request): bool {
            return $request->url() === 'https://api.test/computer'
                && $request->data() === [
                    'number' => '27',
                    'brand' => 'Dell',
                    'environment_id' => '4',
                ];
        });
    }

    public function test_api_validation_errors_return_to_registration_form(): void
    {
        Http::fake([
            'https://api.test/computer' => Http::response([
                'message' => 'The number has already been taken.',
                'errors' => ['number' => ['El número ya está registrado.']],
            ], 422),
        ]);

        $response = $this->from(route('computer.create'))->post(route('computer.store'), [
            'number' => '27',
            'brand' => 'Dell',
            'environment_id' => '4',
        ]);

        $response->assertRedirect(route('computer.create'));
        $response->assertSessionHasErrors(['number']);
        $response->assertSessionHasInput('number', '27');
    }
}
