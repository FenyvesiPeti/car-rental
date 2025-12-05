<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Autókölcsönző</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h1 class="mb-4">Autókölcsönző – Keresés dátum alapján</h1>

    <!-- Hibakezelő üzenet -->
    @if(session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

    <form action="{{ route('cars.search') }}" method="POST" class="row g-3 mb-5">
        @csrf
        <div class="col-md-5">
            <label for="start_date" class="form-label">Kezdő dátum</label>
            <input type="date" id="start_date" name="start_date" class="form-control" required>
        </div>

        <div class="col-md-5">
            <label for="end_date" class="form-label">Vég dátum</label>
            <input type="date" id="end_date" name="end_date" class="form-control" required>
        </div>

        <div class="col-md-2 d-flex align-items-end">
            <button class="btn btn-primary w-100">Keresés</button>
        </div>
    </form>

    <h3>Eredmények</h3>
    <p class="text-muted">Itt fognak megjelenni az autók</p>
</div>

</body>
</html>
