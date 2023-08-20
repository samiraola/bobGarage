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
    <form>
        <h3>Formulaire de commande</h3>
        <table>
            <thead>
                <tr>
                    <th>Articles</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:left;">Pneus</td>
                    <td><input type="text" maxlength="3" name="qte_pneus"></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Huiles</td>
                    <td><input type="text" maxlength="3" name="qte_huiles"></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Bougies</td>
                    <td><input type="text" maxlength="3" name="qte_bougies"></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Adresse de livraison</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><input type="submit" value="Passer commande" style="cursor:pointer;"></td>
                </tr>
            </tbody>
        </table>
    </form>
    </section>
</body>
</html>
