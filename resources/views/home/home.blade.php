<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <!-- Fonts -->
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-menu-bar 
        text="Featured Categories" 
            :menuItems="[
                'All', 
                'Milks & Dairies', 
                'Coffees & Teas', 
                'Pet Foods', 
                'Meats', 
                'Vegetables', 
                'Fruits'
            ]" 
        />
    </body>
</html>



