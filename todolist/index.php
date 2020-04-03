

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST PROJECT</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1> TODO LIST AJAX </h1>
    </header>
    <main>
        <form method="post" action="">
            <div>
                <label for="titre">Titre de la tâche</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="titre">Description de la tâche</label>
                <input type="text" name="description" id="description">
            </div>
            <button> Enregistrer </button>
        </form>
        <div class="todos"></div>
    </main>
    <footer>
        <script src="assets/js/main.js"></script>
    </footer>
    
</body>
</html>