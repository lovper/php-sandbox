<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <p>
            <label for="fname">Förnamn: <br>
                <input type="text" name="fname" id="fname" value="" placeholder="Skriv förnamn här"/>
            </label>
        </p>
        
        <br>
        <br>
        
        <p>
            <label for="pass">Lösenord: <br>
                <input type="password" name="pass" id="pass" value="" placeholder="Skriv lösenord här"/>
            </label>
        </p>
        
        <br>
        <br>

        <p>
            <label for="email">E-mail: <br>
                <input type="email" name="email" id="email" value="" placeholder="Skriv E-mail här" required/>
            </label>
        </p>
        
        <p>
            <label for="animal"> Får
                <input type="radio" name="animal" id="sheep"/>
            </label>
        </p>
        
        <br>
        <br>
        
        <input type="submit" value="Submit"/>
    </form>
    
</body>
</html>