<?php /* /home/aleraymann/Documentos/laravel/Desafio2/resources/views/layouts/app.blade.php */ ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Desafio Let's</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body id="grad1">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="http://www.letsgrow.com.br" target="blank"><img src="/img/pp.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i><u>
                                <img src="/img/you.png"> <?php echo e(Auth::user()->name); ?> </i></u><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <img src="/img/sair.png">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/home"><img src="/img/homepage.png"> <b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/user"><img src="/img/users.png"> <b>Users</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" id="navbarDropdown" data-toggle="dropdown"><img
                            src="/img/prod.png"> <b>Products</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="nav-item dropdown-item" href="<?php echo e(url('/products')); ?>"><img src="/img/list.png">
                            Product List</a>
                        <a class="nav-item dropdown-item" href="<?php echo e(url('/newProduct')); ?>"><img src="/img/add.png"> New
                            Product</a>
                    </div>
                </li>
            </ul>
            <!-- Trigger/Open The Modal -->
            <button class="btn btn-outline-primary " id="myBtn">Find Us</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <h4>Let's Grow Sistemas Inteligentes</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.3860350258446!2d-51.467073885534816!3d-25.39188558380598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef36304a759317%3A0x9445763b5bcfef16!2sR.+XV+de+Novembro%2C+7286+-+Centro%2C+Guarapuava+-+PR%2C+85010-000!5e0!3m2!1spt-BR!2sbr!4v1554488185621!5m2!1spt-BR!2sbr" 
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                    <ul>
                    <li><h5>Rua XV de novembro, 7286 - 2º andar, sala 5;</h5></li>
                    <li><h5>Funcionamento: Seg a Sex das 9:00 AM às 18:00 PM;</h5></li>
                    <li><h5>Telefones: TIM:42 9.9973-8042 / VIVO:42 9.9142-7446;</h5></li>
                    </ul>  
                    <span class="close text-right"> &times;</span>    
                </div>

            </div>

        </div>
        <?php endif; ?>
        </div>
    </nav>

    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    </div>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#"><img src="/img/up.png"> Back to top</a>
            </p>
            <p>Dev: @aleraymann  ©2019</p>
            <p>
                <p>Send me an email: <a href="mailto:aleraymann@gmail.com" target="blank"><img src="/img/gmail.png"></a>
                    or visit <a href="https://www.facebook.com/alessandro.raymann" target="blank"><img
                            src="/img/face.png"></a>
                    / <a href="https://www.instagram.com/aleraymann/" target="blank"><img src="/img/insta.png"></a>
                </p>
            </p>
        </div>
    </footer>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <?php echo $__env->yieldContent('javascript'); ?>
    <script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>