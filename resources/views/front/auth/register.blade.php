<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 2rem;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #111827;
            text-align: center;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #374151;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.25rem;
            font-size: 1rem;
        }
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 0.875rem;
            width: 100%;
        }
        .btn-primary { background-color: #3b82f6; }
        .btn-primary:hover { background-color: #2563eb; }
        .links {
            margin-top: 1rem;
            text-align: center;
        }
        .links a {
            color: #6b7280;
            text-decoration: none;
            font-size: 0.875rem;
        }
        .links a:hover {
            color: #111827;
        }
        .error {
            background-color: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 0.75rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>

        <div class="links">
            <a href="{{ route('login') }}">Déjà un compte ? Se connecter</a>
        </div>
    </div>
</body>
</html>
