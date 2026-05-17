**Location:** `resources/views/welcome.blade.php`

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tracker</title>
    <style>
        /* Simple, clean styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        h1 {
            color: #667eea;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }
        .project-card {
            background: #f7f7f7;
            padding: 20px;
            margin: 15px 0;
            border-left: 4px solid #667eea;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .project-card:hover {
            transform: translateX(5px);
        }
        .status {
            display: inline-block;
            padding: 5px 15px;
            background: #667eea;
            color: white;
            border-radius: 20px;
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 My Project Tracker</h1>
        <p>Welcome! Here are all your active projects.</p>
        
        {{-- This is a Blade comment - it won't appear in the HTML --}}
        {{-- The @foreach loop will repeat this section for each project --}}
        
        @foreach($projects as $project)
            <div class="project-card">
                {{-- {{ }} is how you print variables in Blade templates --}}
                <h3>{{ $project['name'] }}</h3>
                <span class="status">{{ $project['status'] }}</span>
            </div>
        @endforeach
        
        {{-- @if there were no projects, show a message --}}
        @if(count($projects) === 0)
            <p>No projects yet. Time to start building!</p>
        @endif
    </div>
</body>
</html>
