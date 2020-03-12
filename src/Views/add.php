<style>

    body{
        background: -webkit-linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
        background: linear-gradient(90deg, rgba(107,139,145,1) 0%, rgba(78,200,223,1) 68%, rgba(151,213,226,0.8883928571428571) 100%);
        font-family: 'Roboto', sans-serif;

    }
    .form-style-6{
        font: 95% Arial, Helvetica, sans-serif;
        max-width: 400px;
        margin: 10px auto;
        padding: 16px;
        background: #F7F7F7;
    }
    .form-style-6 h1{
        background: #4F535B;
        padding: 20px 0;
        font-size: 140%;
        font-weight: 300;
        text-align: center;
        color: #fff;
        margin: -16px -16px 16px -16px;
    }
    .form-style-6 input[type="text"],
    .form-style-6 textarea,
    .form-style-6 select
    {
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        background: #fff;
        margin-bottom: 4%;
        border: 1px solid #ccc;
        padding: 3%;
        color: #555;
        font: 95% Arial, Helvetica, sans-serif;
    }
    .form-style-6 input[type="text"]:focus,
    .form-style-6 textarea:focus,
    .form-style-6 select:focus
    {
        box-shadow: 0 0 5px #43D1AF;
        padding: 3%;
        border: 1px solid #43D1AF;
    }

    .form-style-6 input[type="submit"],
    .form-style-6 input[type="button"]{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        padding: 3%;
        background: #4F535B;
        border-bottom: 2px solid #3B4A63;
        border-top-style: none;
        border-right-style: none;
        border-left-style: none;
        color: #fff;
    }
    .form-style-6 input[type="submit"]:hover,
    .form-style-6 input[type="button"]:hover{
        background: #96999E;
    }
</style>
<meta charset="UTF-8">
<html>
    <head>
    </head>
    <body>
        <div class="form-style-6">
        <h1>Ajout d'un nouveau bug</h1>
        <form method="post">
            <input type="text" name="intitule" placeholder="Intitulé"/>
            <input type="text" name="description" placeholder="Description"/>
            <input type="text" name="url" placeholder="URL"/>
            <input type="submit" value="Enregistrer" name="Enregistrer"/>
        </form>
            <a href="liste">Retour à la liste des bugs</a>
    </body>
</html>



