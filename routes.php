**Location:** `routes/web.php`

```php
<?php

use Illuminate\Support\Facades\Route;

// This is the "homepage" route
// When someone visits "/", Laravel will run this function
Route::get('/', function () {
    
    // Create a simple array of projects (pretend this came from a database)
    $projects = [
        ['name' => 'Build Portfolio Website', 'status' => 'In Progress'],
        ['name' => 'Learn Laravel', 'status' => 'Started'],
        ['name' => 'Create Mobile App', 'status' => 'Planning'],
    ];
    
    // Send the $projects data to a view file called "welcome"
    // Laravel will automatically look for "resources/views/welcome.blade.php"
    return view('welcome', ['projects' => $projects]);
});
```

**🔍 What This Does:**
- `Route::get('/', ...)` → "When someone visits the homepage..."
- `$projects = [...]` → "Here's some fake data we're pretending came from a database"
- `return view('welcome', ...)` → "Show the 'welcome' page and give it access to the $projects variable"

