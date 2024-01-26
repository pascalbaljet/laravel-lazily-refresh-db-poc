<?php

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\DB;

test('it creates a user', function () {
    DB::transaction(fn () => UserFactory::new()->create());

    expect(User::count())->toBe(1);
});

test('in the next test, the user is gone', function () {
    expect(User::count())->toBe(0);
});
