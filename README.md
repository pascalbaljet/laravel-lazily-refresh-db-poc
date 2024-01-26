[The test passes with the RefreshDatabase trait, but fails with the LazilyRefreshDatabase trait](https://twitter.com/pascalbaljet/status/1750802463400099872)

Tested with PHP 8.3.0 (via Laravel Herd) + Laravel 10.42 + MySQL 8.0.33 (via DBngin).

```bash
./vendor/bin/pest 

   FAIL  Tests\Feature\RefreshDatabaseTest
  ✓ it creates a user                                                                                            0.16s  
  ⨯ in the next test, the user is gone                                                                           0.01s  
  ────────────────────────────────────────────────────────────────────────────────────────────────────────────────────  
   FAILED  Tests\Feature\RefreshDatabaseTest > in the next test, the user is gone                                       
  Failed asserting that 1 is identical to 0.

  at tests/Feature/RefreshDatabaseTest.php:14
     10▕     expect(User::count())->toBe(1);
     11▕ });
     12▕ 
     13▕ test('in the next test, the user is gone', function () {
  ➜  14▕     expect(User::count())->toBe(0);
     15▕ });
     16▕ 

  1   tests/Feature/RefreshDatabaseTest.php:14


  Tests:    1 failed, 1 passed (2 assertions)
  Duration: 0.24s
```
