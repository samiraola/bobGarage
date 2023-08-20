<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Garage</title>
</head>
<body style="width:100%; min-height:100vh; display:flex; justify-content:center; align-items:center;">
    <section style="width:100%; max-width:fit-content; padding:10px; border:1px solid; text-align:center">
        <h1>LE GARAGE DE BOB</h1>
        <h3>Résultats de la commande</h3>
        <?php if(!empty($error)):?>
            <p>Aucune commande effectuée! <a href="index.php">Retour</a></p>
        <?php else:?>
            <p>Commande traitée à xx:xx le xx-xx-xxxx</p>
            <p>Addresse de livraison: <b>XXXX</b></p>
            <hr>
            <h5>Récapitulatif de la commande</h5>
            <form>
            <table border>
                <thead>
                    <tr>
                        <th>Articles</th>
                        <th>Quantité</th>
                        <th>Prix Unitaire</th>
                        <th>Prix Final</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pneus</td>
                        <td>-</td>
                        <td>-€</td>
                        <td>-€</td>
                    </tr>
                    <tr>
                        <td>Huiles</td>
                        <td>-</td>
                        <td>-€</td>
                        <td>-€</td>
                    </tr>
                    <tr>
                        <td>Bougies</td>
                        <td>-</td>
                        <td>-€</td>
                        <td>-€</td>
                    </tr>
                    <tr>
                        <td colspan="4"><b>Prix de la commande = -€</b></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Validez" style="margin-top: 10px; cursor:pointer;">
            </form>
        <?php endif;?>
    </section>
</body>
</html>
