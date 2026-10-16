<?php

use App\Models\Contact;
use App\Models\OurRange;
use App\Models\OurRangeCategory;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('guest is redirected to login from admin dashboard', function () {
    $this->get('/admin')
        ->assertRedirect('/login');
});

test('authenticated admin can view clean dashboard with dynamic metrics', function () {
    $user = User::factory()->create();

    Setting::set('company_name', 'Shallom Prefab Systems Dynamic');
    Setting::set('proprietor', 'Mr. Arvind Kumar Gautam');

    Service::create([
        'name' => 'Industrial Turnkey Prefab',
        'slug' => 'industrial-turnkey-prefab',
        'short_description' => 'High quality turnkey prefabrication',
        'is_active' => true,
    ]);

    $category = OurRangeCategory::create([
        'name' => 'Site Office Cabins',
        'slug' => 'site-office-cabins',
        'is_active' => true,
    ]);

    OurRange::create([
        'our_range_category_id' => $category->id,
        'title' => 'Executive Office Cabin 20x10',
        'is_active' => true,
    ]);

    $contact = Contact::create([
        'name' => 'L&T Construction Site Desk',
        'phone' => '+91-9899552380',
        'email' => 'site.desk@larsentoubro.com',
        'building_interest' => 'Prefabricated Site Office Cabin',
        'project_location' => 'Noida Sector 62',
        'message' => 'Need 12 units urgently.',
        'is_read' => false,
    ]);

    $this->actingAs($user)
        ->get('/admin')
        ->assertOk()
        ->assertSee('CONTROL DESK')
        ->assertSee('Shallom Prefab Systems Dynamic')
        ->assertSee('Mr. Arvind Kumar Gautam')
        ->assertSee('L&amp;T Construction Site Desk', false)
        ->assertSee('Prefabricated Site Office Cabin');
});

test('livewire clean dashboard can toggle contact read status and view details', function () {
    $user = User::factory()->create();

    $contact = Contact::create([
        'name' => 'Adani Infra Projects',
        'phone' => '07942550323',
        'email' => 'procurement@adaniinfra.com',
        'building_interest' => 'Labour Hutments',
        'project_location' => 'Mundra Port Site',
        'is_read' => false,
    ]);

    Livewire::actingAs($user)
        ->test('admin::dashboard')
        ->assertSee('Adani Infra Projects')
        ->call('toggleReadStatus', $contact->id)
        ->assertDispatched('toast-show');

    expect($contact->fresh()->is_read)->toBeTrue();

    Livewire::actingAs($user)
        ->test('admin::dashboard')
        ->call('viewContact', $contact->id)
        ->assertDispatched('open-modal');
});
