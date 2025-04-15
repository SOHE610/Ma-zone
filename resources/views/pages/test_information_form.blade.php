<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester le Signalement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Tester le Signalement</h1>
        <form action="{{ route('test.information.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Protection CSRF -->
            
            <div class="form-group">
                <label for="type">Type de Signalement:</label>
                <input type="text" id="type" name="type" placeholder="Ex: Incendie" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Décrivez le problème..." required></textarea>
            </div>

            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="number" step="any" id="latitude" name="latitude" placeholder="Ex: 48.8566" required>
            </div>

            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="number" step="any" id="longitude" name="longitude" placeholder="Ex: 2.3522" required>
            </div>

            <div class="form-group">
                <label for="image">Image (facultatif):</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>

            <div class="form-group">
                <button type="submit"> <a href="/Réception">Envoyer</a></button>
            </div>
           
        </form>
    </div>
</body>
</html>