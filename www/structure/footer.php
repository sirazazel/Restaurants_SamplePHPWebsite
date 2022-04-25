<?php

function footer(){
    print('
            <footer class="footer sticky-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-muted">Francesc Mut Mollà</p>
                            <p class="text-muted">Implementació d\'Aplicacions Web</p>
                            <p class="text-muted">2n ASIX Dual</p>
                            <a class="link-secondary text-right" href="https://github.com/cifpfbmoll/Restaurants_MutFrancesc">Check my GitHub repository!</a>
                        </div>
                        <div class="col-sm-3">
                            <div class="d-flex mx-lg-5 text-light">
                                <form action="./structure/login.php" method="post">
                                    <label for="username">Username:</label><br>
                                        <input type="text" id="username" name="username"><br>
                                    <label for="password">Password:</label><br>
                                        <input type="password" id="password" name="password"><br><br>
                                    <input type="submit" value="Log in">
                                    <input type="reset">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> 
        ');
}

?>