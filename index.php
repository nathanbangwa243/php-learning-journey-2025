<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];


$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

function isValidRecipe(array $recipe) : bool
{
    $isEnabled =  false;
    
    if (array_key_exists('is_enabled', $recipe)){
        $isEnabled = $recipe['is_enabled'];
    }
    else {
        $isEnabled = False;
    }
    
    return $isEnabled;
}

function getValidRecipes(array $recipes) : array {
    $validRecipes = [];
    
    foreach ($recipes as $recipe){
        $isValid = isValidRecipe($recipe);
        
        if ($isValid){
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}

function displayAuthor(array $users, array $recipe) {
    foreach ($users as $user){
        if ($user['email'] == $recipe['author']){
            printf("Author ". $user['full_name'] . "<br/>");
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>Affichage des recettes</h1>
    <!-- Boucle sur les recettes -->
    <?php foreach ($recipes as $recipe) : ?>
        <!-- si la clé existe et a pour valeur "vrai", on affiche -->
        <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo $recipe['author']; ?></i>
            </article>

        <?php endif; ?>
    <?php endforeach ?>

    <?php
        echo "<strong>THE SAME THING BUT WITH strlen</strong><br/>";
        foreach ($recipes as $recipe){
            echo $recipe['title']. "lenth : " . strlen($recipe['title']) . "<br/>";
            echo str_replace('a', 'A', $recipe['title']) . PHP_EOL;

            echo sprintf(
                    'Recipe: %s - Author : %s - Duration : %s:%s <br/>',
                $recipe['title'],
                $recipe['author'],
                strlen($recipe['title']),
                strlen($recipe['title'])
            );
        }
    ?>

    <?php
        echo "<strong>DATE MANIPULATION</strong><br/>";
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        $heure = date('H');
        $minute = date('i');

        echo sprintf(
                '%s-%s-%s  %s:%s <br/>',
            $day,
            $month,
            $year,
            $heure,
            $minute
        );

        $today = date('d-m-Y');
        $hour = date('H \h m');

        echo sprintf(
                'Datetime : %s - %s <br/>',
            $today,
            $hour
        );

    ?>
    
    <?php 
        echo "<strong>TEST FUNCTION</strong><br/>";
        
        $validRecipes = [];
        
        foreach ($recipes as $recipe) {
            $isValid = isValidRecipe($recipe);
            
            if ($isValid){
                echo "<strong>" . $recipe['title'] . "</strong><br/>";
                
                // Add the recipe to ValidRecipes list
                $validRecipes[] = $recipe;
            }
            else{
                echo "<i>" . $recipe['title'] . "</i><br/>";
            }
        }
        
    ?>
    
    <pre>
        <?php
        
            echo "<strong>List Of Valid Recipes</strong><br/>";
            $validRecipes = getValidRecipes($recipes);
            
            print_r($validRecipes);
        ?>
    </pre>
    
    <?php 
    
    echo "<strong>EXERCISE</strong><br/>";
    
    foreach (getValidRecipes($recipes) as $recipe){
        displayAuthor($users, $recipe);
    }
    
    ?>
</div>
</body>
</html>