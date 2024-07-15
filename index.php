<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" placeholder="first name ...">

            <label for="lastname">lastName</label>
            <input type="text" name="lastname" placeholder="last name ...">

            <label for="favoritegame">Favorite Game ?</label>
            <select name="favoritegame" id="favoritegame">
                <option value="none">None</option>
                <option value="fortnite">Fortnite</option>
                <option value="minecraft">Minecraft</option>
                <option value="roblox">Roblox</option>
                <option value="amongus">Among Us</option>
            </select>
            <h1>Form</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat aperiam, quo officia ratione eos, ipsum et qui quas ipsam deleniti deserunt. Rerum ipsum labore exercitationem explicabo, fuga earum cupiditate quasi iste quam vero excepturi saepe pariatur, officiis laborum ea magni.</p>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
    <?php

    ?>

</body>

</html>