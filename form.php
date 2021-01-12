<div class="container">
    <img src="assets\img\download (4).gif" width="1000" class="img-fluid text-center" alt="le formulaire incroyable">
    <form method="POST">
        <div class="input-group mb-5 ">
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Civilité</span>
            <Select class="form-select bg-secondary text-light" value="<?= $gender ?? '' ?>" name="gender" aria-label="Default select example">
                <option value="NULL"></option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme </option>
                <option value="Autre">Autre</option>
            </Select>
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Nom</span>
            <input type="text" class="form-control bg-secondary text-light p-3" pattern="[a-zA-Z -\D]+" name="name"
                aria-label="Name" aria-describedby="basic-addon1" value="<?= $name ?? '' ?>" title="Vous avez des chiffres dans votre nom vous ?"
                required>
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Prenom</span>
            <input type="text" class="form-control bg-secondary text-light p-3" pattern="[a-zA-Z -\D]+" name="firstname"
                aria-label="Firstname" aria-describedby="basic-addon1" value="<?= $firstname ?? '' ?>" title="Vous avez des chiffres dans votre nom vous ?"
                required>
        </div>
        <div class="input-group mb-5 ">
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Age</span>
            <input type="number" class="form-control bg-secondary text-light p-3" pattern="[0-9]{3}+" name="age"
                aria-label="Age" aria-describedby="basic-addon1" value="<?= $age ?? '' ?>" title="Vous avez des chiffres dans votre nom vous ?"
                required>
            <span class="input-group-text border-0 bg-dark text-light" id="basic-addon1">Societe</span>
            <input type="text" class="form-control bg-secondary text-light p-3" pattern="[a-zA-Z -\D]+" name="enterprise"
                aria-label="Name" aria-describedby="basic-addon1" value="<?= $enterprise ?? '' ?>" title="Vous avez des chiffres dans votre nom vous ?"
                required>
        </div>
        <div class="input-group ">
            <div class="input-group mb-5 input-button">
                <input type="submit" class="form-control bg-danger text-light">
            </div>
        </div>

    </form>
</div>