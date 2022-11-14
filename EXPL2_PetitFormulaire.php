
<html>
<body>

<form action="EXPL2_AnalyseFormulaire.php" method="post">

    Nom :
    <input name="nom" type="text">
<br>
    Prenom :
    <input name="prenom" type="text">
<br>
<br>
    choisez parmi les BTS :
    <select id="BTS" name="BTS">
        <option value="nul">choisez parmi les BTS</option>
        <option value="SIO">SIO</option>
        <option value="Assurance">Assurance</option>
        <option value="Commerce International">Commerce International</option>
    </select>
<br>
<br>
<br>
    choisez parmi les langues :
<br>
    <select id="langues" name="Langues[]" multiple >
        <option value="Anglais">Anglais</option>
        <option value="Espagnol">Espagnol</option>
        <option value="Allemand">Allemand</option>
    </select>
<br>
<br>
    <input type="submit" name="soumettre" value="OK" />

</form>
</body>
</html>




