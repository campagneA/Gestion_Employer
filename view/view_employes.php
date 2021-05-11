<?php
include_once(__DIR__ . "/../model/Employe.php");

function compteurAjoutToday($nbr)
{
?>
    <h5 class='position-compteur'>Nombre d'Ajout Aujourd'hui : <?php echo $nbr ?></h5>
<?php
}

function afficheEmployes($result, string $session, $finalListeSup)
{
?>
    <table class='table table-dark table-striped text-center'>
        <tr>
            <th>NOEMP</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMPLOI</th>
            <th>SUP</th>
            <th>EMBAUCHE</th>
            <?php if ($session == 'Admin') {
            ?> <th>SALAIRE</th>
                <th>COMMISSION</th>
            <?php } ?>
            <th>NOSERV</th>
            <th>NOPROJ</th>
            <?php if ($session == 'Admin') {
            ?> <th>#</th>
                <th>#</th>
        </tr>
    <?php }
            foreach ($result as $data) {
    ?> <tr>
            <td><?php echo $data->getNoemp() ?></td>
            <td><?php echo $data->getNom() ?></td>
            <td><?php echo $data->getPrenom() ?></td>
            <td><?php echo $data->getEmploi() ?></td>
            <td><?php echo $data->getSup() ?></td>
            <td><?php echo $data->getEmbauche() ?></td>
            <?php if ($session == 'Admin') {
            ?> <td><?php echo $data->getSal() ?></td>
                <td><?php echo $data->getComm() ?></td>
            <?php } ?>
            <td><?php echo $data->getNoserv() ?></td>
            <td><?php echo $data->getNoproj() ?></td>
            <?php if ($session == 'Admin') {
                    if (array_search($data->getNoemp(), $finalListeSup) == false) { ?>
                    <td><a class='btn btn-warning btn-sm' href='Modifier_info.php?id=<?php echo $data->getNoemp() ?>'>Modifier</a></td>
                    <td><a class='btn btn-danger btn-sm' href='Demande_Supp.php?id=<?php echo $data->getNoemp() ?>'>X</a></td>
                <?php } else { ?>
                    <td><a class='btn btn-warning btn-sm' href='Modifier_info.php?id=<?php echo $data->getNoemp() ?>'>Modifier</a></td>
                    <td></td>
                <?php } ?>
        </tr>
    <?php       } 
            } ?>
    </table>
<?php
}

function formulaireInscriptionEmployer()
{
?>
    <div class="d-grid gap-2 col-sm-3 m-2 mx-auto">
        <a class="btn btn-secondary" href="Test_formulaire.php" role="button">Formulaire d'inscription</a>
    </div>
    <form method="POST" action="Ajout_info.php">
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Numero d'employé</div>
                    <input type="text" class="form-control" id="noemp" name="noemp" placeholder="0000" value="<?php echo isset($_POST['noemp']) ? $_POST['noemp'] : ''; ?>" autofocus>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Nom</div>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Prenom</div>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Emploi</div>
                    <input type="text" class="form-control" id="emploi" name="emploi" placeholder="Développeur">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Le Supérieur</div>
                    <input type="number" class="form-control" id="sup" name="sup" placeholder="0000">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Date d'embauche</div>
                    <input type="date" class="form-control" id="embauche" name="embauche" placeholder="Entrer la date d'embauche">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Le Salaire</div>
                    <input type="number" class="form-control" id="sal" name="sal" placeholder="0000,00">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">La Commission</div>
                    <input type="number" class="form-control" id="comm" name="comm" placeholder="Entrer la Commission">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Le numero de service</div>
                    <input type="number" class="form-control" id="noserv" name="noserv" placeholder="0">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 m-2 mx-auto">
                <div class="input-group">
                    <div class="input-group-text">Le numero de projet</div>
                    <input type="number" class="form-control" id="noproj" name="noproj" placeholder="100">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-3 m-2 mx-auto justify-content-md-center">
            <input type="submit" class="btn btn-primary" value="Ajouter" name="submit">
        </div>
    </form>

<?php
}

function afficheInfoEmploye($result)
{
?>
    <form method='POST' action='Modifier_info.php'>
        <table class='table table-dark table-striped text-center'>

            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>emploi</th>
                <th>sup</th>
                <th>sal</th>
                <th>comm</th>
                <th>noserv</th>
                <th>noproj</th>
                <th>#</th>
            </tr>
            <tr>
                <td><input type='text' class='form-control' name='nom' value=<?php echo $result->getNom() ?>></td>
                <td><input type='text' class='form-control' name='prenom' value=<?php echo $result->getPrenom() ?>></td>
                <td><input type='text' class='form-control' name='emploi' value=<?php echo $result->getEmploi() ?>></td>
                <td><input type='number' class='form-control' name='sup' value=<?php echo $result->getSup() ?>></td>
                <td><input type='number' class='form-control' name='sal' value=<?php echo $result->getSal() ?>></td>
                <td><input type='number' class='form-control' name='comm' value=<?php echo $result->getComm() ?>></td>
                <td><input type='number' class='form-control' name='noserv' value=<?php echo $result->getNoserv() ?>></td>
                <td><input type='number' class='form-control' name='noproj' value=<?php echo $result->getNoproj() ?>></td>
                <td><input type='submit' class='btn btn-warning btn-sm' value='submit' name='submit'></td>
            </tr>
        </table>
        <input type='hidden' name='noemp' value=<?php echo $result->getNoemp() ?>>
    </form>
<?php
}

function afficheMsgErreur($message)
{
    $i = 0;      
?>
    <div class='background'><h4>Erreur de saisie :</h4>
<?php
    for ($i = 0; $i < count($message); $i++) {
        echo $message[$i];
    } ?>
    </div>
<?php
}
?>
