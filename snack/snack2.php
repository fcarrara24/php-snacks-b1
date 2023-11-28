


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a class="button btn-warning px-3" href="../index.php">index</a>

    <?php
    $nome= $_GET['nome'];
    $email= $_GET['email'];
    $age = $_GET['age'];
    
    if(!empty($nome)&& !empty($email) && !empty($age)){
        if(is_numeric($age) && strlen($nome)>3 && str_contains($email, '@') && str_contains($email, '.')){
            echo '<div>Accesso riuscito</div>';
        } else {
            echo '<div>Accesso negato</div>';  
            if (!is_numeric($age)){
                echo 'l\'eta deve essere un numero';
            }
            if (!strlen($nome)>3){
                echo 'il nome deve essere piu lungo di 3 caratteri';
            }
            if (!str_contains( $email, '@') || !str_contains($email, '.')){
                echo 'la mail deve contenere una @ e un .';
            }
        }
        
    }
    else {?>
         <form method="get">
                <div class="form-group">
                    <label for="nome">Name</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            
                <div class="form-group">
                    <label class="form-check-label" for="age" >eta</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="eta">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <?php
    }


    ?>
    

</body>
</html>


