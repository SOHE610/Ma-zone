<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'enregistrement d'une mairie</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e6f0f3, #ffffff);
      margin: 0;
      padding: 40px 20px;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
      font-size: 28px;
    }

    form {
      background-color: #ffffff;
      max-width: 600px;
      margin: auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease-in-out;
    }

    form:hover {
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
    }

    label {
      display: block;
      margin-top: 20px;
      font-weight: 600;
      color: #34495e;
      font-size: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="file"],
    select {
      width: 100%;
      padding: 12px 14px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.3s;
    }

    input:focus,
    select:focus {
      outline: none;
      border-color: #3498db;
      box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
    }

    button {
      margin-top: 30px;
      background-color: #3498db;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
      font-size: 17px;
      font-weight: bold;
      transition: background-color 0.3s ease-in-out;
    }

    button:hover {
      background-color: #2980b9;
    }

    /* Style du message de succès */
    div[style*="background-color: #d4edda"] {
      color: #155724;
      border: 1px solid #c3e6cb;
      background-color: #d4edda;
      border-radius: 6px;
      padding: 12px;
      margin-bottom: 20px;
      font-size: 14px;
    }

    /* Responsive */
    @media (max-width: 640px) {
      form {
        padding: 20px;
      }
    }
  </style>

</head>
<body>

  <h2>Enregistrement d'une Mairie</h2>
  @if(session('success'))
    <div style="background-color: #d4edda; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
        {{ session('success') }}

    </div>
  @endif

   @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



  <form  action="/mairies" method="POST" enctype="multipart/form-data">
    @csrf


    <label for="nom">Nom de la mairie *</label>
    <input type="text" id="nom" name="nom" required value="{{ old('nom') }}">

    <label for="adresse">Adresse *</label>
    <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" required>

    <label for="email">Email de contact *</label>
    <input type="email" id="email_contact" name="email_contact" value="{{ old('email_contact') }}" required>

    <label for="telephone">Téléphone *</label>
    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required>

    <label for="password">Mots de passe *</label>
    <input type="password" id="password" name="password" value="{{ old('password') }}" required>

    <label for="logo">Logo (facultatif)</label>
    <input type="file" id="logo" name="logo" value="{{ old('logo') }}" accept="image/*">

    <label for="responsable">Nom du responsable (facultatif)</label>
    <input type="text" id="responsable_nom" value="{{ old('responsable_nom') }}" name="responsable_nom">

    <label for="commune">Commune *</label>
    <select id="commune" name="commune"  required>
      <option value="">-- Sélectionnez une commune --</option>
      <option value="sèkandji">Sèkandjie</option>
      <!-- Les options seront ajoutées dynamiquement par JavaScript -->
    </select>

    <button type="submit">Enregistrer</button>
  </form>

  <script>
    // Liste des 77 communes du Bénin
    const communes = [
      "Abomey", "Abomey-Calavi", "Adja-Ouèrè", "Adjarra", "Adjohoun", "Agbangnizoun", "Aguégués", "Allada", "Aplahoué",
      "Athiémé", "Avrankou", "Banikoara", "Bantè", "Bassila", "Bembéréké", "Bohicon", "Bonou", "Bopa", "Boukombé",
      "Cobly", "Comè", "Copargo", "Cotonou", "Covè", "Dangbo", "Dassa-Zoumè", "Djakotomey", "Djidja", "Djougou",
      "Dogbo", "Glazoué", "Gogounou", "Grand-Popo", "Houéyogbé", "Ifangni", "Kalalé", "Kandi", "Karimama", "Kérou",
      "Kétou", "Klouékanmè", "Kouandé", "Kpomassè", "Lalo", "Lokossa", "Malanville", "Matéri", "Missérété", "N’dali",
      "Natitingou", "Nikki", "Ouaké", "Ouèssè", "Ouidah", "Ouinhi", "Parakou", "Péhunco", "Pèrèrè", "Pobè", "Porto-Novo",
      "Sakété", "Savalou", "Savè", "Ségbana", "Sèmè-Podji", "Sinendé", "Sô-Ava", "Tanguiéta", "Tchaourou", "Toffo",
      "Tori-Bossito", "Toucountouna", "Toviklin", "Zagnanado", "Za-Kpota", "Zè", "Zogbodomey"
    ];

    // Remplir la liste déroulante des communes
    const communeSelect = document.getElementById("commune");
    communes.forEach(commune => {
      const option = document.createElement("option");
      option.value = commune;
      option.textContent = commune;
      communeSelect.appendChild(option);
    });

    // Gestion de la soumission du formulaire

  </script>

</body>
</html>
