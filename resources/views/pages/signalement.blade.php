<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Signalement</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
            :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --success-color: #2ecc71;
            --danger-color: #e74c3c;
            --light-gray: #f5f5f5;
            --medium-gray: #e0e0e0;
            --dark-gray: #333;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary-color);
        }

        h1 i {
            margin-right: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-gray);
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--medium-gray);
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus,
        select:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .location-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .location-btn {
            padding: 12px 15px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .location-btn:hover {
            background-color: var(--secondary-color);
        }

        .location-status {
            padding: 12px;
            background-color: var(--light-gray);
            border-radius: 4px;
            flex-grow: 1;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
        }

        .file-upload {
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .upload-btn {
            padding: 12px 15px;
            background-color: var(--light-gray);
            color: var(--dark-gray);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .upload-btn:hover {
            background-color: var(--medium-gray);
        }

        #fileName {
            color: #666;
            font-size: 14px;
        }

        .image-preview {
            margin-top: 10px;
            max-width: 100%;
            max-height: 200px;
            display: none;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 4px;
            border: 1px solid var(--medium-gray);
        }

        .form-actions {
            text-align: center;
            margin-top: 30px;
        }

        .submit-btn {
            padding: 14px 30px;
            background-color: var(--success-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            transition: background-color 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .submit-btn:hover {
            background-color: #27ae60;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: var(--white);
            padding: 30px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            position: relative;
            animation: modalopen 0.4s;
        }

        @keyframes modalopen {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            color: #aaa;
            cursor: pointer;
        }

        .close:hover {
            color: var(--dark-gray);
        }

        .modal-icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .modal-icon.success {
            color: var(--success-color);
        }

        .modal-btn {
            padding: 12px 25px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .modal-btn:hover {
            background-color: var(--secondary-color);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 15px;
                padding: 15px;
            }
            
            .location-container {
                flex-direction: column;
                align-items: stretch;
            }
            
            .location-btn {
                width: 100%;
            }
        }
</style>

<body>
    <div class="container">
        <h1><i class="fas fa-exclamation-triangle"></i> Nouveau Signalement</h1>
        
        <form id="signalementForm">
            <div class="form-group">
                <label for="titre">Titre du signalement*</label>
                <input type="text" id="titre" name="titre" required placeholder="Décrivez brièvement le problème">
            </div>
            
            <div class="form-group">
                <label for="description">Description détaillée*</label>
                <textarea id="description" name="description" required placeholder="Décrivez le problème en détails..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="categorie">Catégorie*</label>
                <select id="categorie" name="categorie_id" required>
                    <option value="">Sélectionnez une catégorie</option>
                    <option value="1">Propreté</option>
                    <option value="2">Voirie</option>
                    <option value="3">Éclairage public</option>
                    <option value="4">Espaces verts</option>
                    <option value="5">Stationnement</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="quartier">Quartier*</label>
                <select id="quartier" name="quartier_id" required>
                    <option value="">Sélectionnez un quartier</option>
                    <option value="1">Centre-ville</option>
                    <option value="2">Nord</option>
                    <option value="3">Sud</option>
                    <option value="4">Est</option>
                    <option value="5">Ouest</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Localisation*</label>
                <div class="location-container">
                    <button type="button" id="getLocationBtn" class="location-btn">
                        <i class="fas fa-map-marker-alt"></i> Obtenir ma position
                    </button>
                    <div id="locationStatus" class="location-status">
                        <i class="fas fa-info-circle"></i> Cliquez pour enregistrer votre position
                    </div>
                </div>
                <input type="hidden" id="latitude" name="latitude">
                <input type="hidden" id="longitude" name="longitude">
            </div>
            
            <div class="form-group">
                <label for="photo">Photo (optionnelle)</label>
                <div class="file-upload">
                    <input type="file" id="photo" name="photo" accept="image/*">
                    <label for="photo" class="upload-btn">
                        <i class="fas fa-camera"></i> Choisir une photo
                    </label>
                    <span id="fileName">Aucun fichier sélectionné</span>
                </div>
                <div id="imagePreview" class="image-preview"></div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Envoyer le signalement
                </button>
            </div>
        </form>
    </div>

    <div id="successModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-icon success">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Signalement envoyé avec succès!</h2>
            <p>Votre signalement a bien été enregistré. Nous traiterons votre demande dans les meilleurs délais.</p>
            <button id="closeModalBtn" class="modal-btn">Fermer</button>
        </div>
    </div>

    <script >
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('signalementForm');
    const getLocationBtn = document.getElementById('getLocationBtn');
    const locationStatus = document.getElementById('locationStatus');
    const latitudeInput = document.getElementById('latitude');
    const longitudeInput = document.getElementById
    </script>
</body>
</html>