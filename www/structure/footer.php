<?php


function footer(){
    print('
            <footer class="footer">
            <div class="container-fluid text-center text-md-left">
              <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                  <h5 class="text-uppercase">About me</h5>
                  <p>I\'m Francesc Mut Mollà, and this is a project for the IAW class of 2022.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Github</h5>
                        <a class="link-secondary p-0" href="https://github.com/cifpfbmoll/Restaurants_MutFrancesc">Source code</a>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Account information</h5>
                        ');
                        if (isset($_SESSION['user_id'])){
                            print('
                            <p class = "text-dark" style="margin-bottom:0;">Logged in as '.$_SESSION['email'].'.</p>
                            <a class = "text-dark" href="structure/logout.php" style="padding-top: 0">Click here to log out.</a>
                            ');
                        } else {
                            print('    
                                <div class="">              
                                    <form action="./../index.php" method="post">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="username" placeholder="username" class="form-control-sm">
                                                    <input type="reset">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="password" id="password" name="password" placeholder="password" class="form-control-sm">
                                                    <input type="submit" value="Log in">
                                                </div>
                                            </div>
                                        </div>
                                    </form>       
                                </div>                     
                            ');
                        }
                        print ('
                        
                    </div>
                </div>
              </div>
            </div>
            </footer> 
        ');
}

?>


<!-- <button type="button" class="btn btn-primary" data-toggle="popover" title="Login Form">Log in</button>
<div id="popover-head" class="hidden">
    Log in
</div>
<div id="popover-content" class="hidden">
    <form action="./../index.php" method="post"><label for="username">Username:</label><br><input type="text" id="username" name="username"><br><label for="password">Password:</label><br><input type="password" id="password" name="password"><br><br><input type="submit" value="Log in"><input type="reset"></form>
</div> -->
<!-- 
<div class="row">
    <div class="col">
        <p class="text-muted">Francesc Mut Mollà</p>
        <p class="text-muted">Implementació d\'Aplicacions Web</p>
        <p class="text-muted">2n ASIX Dual</p>
        <a class="link-secondary text-right" href="https://github.com/cifpfbmoll/Restaurants_MutFrancesc">Check my GitHub repository!</a>
    </div>
    <div class="col-sm-3">
        <div class="d-flex mx-lg-5 text-light">
            <div class = "flex-column card">');
                if (isset($_SESSION['user_id'])){
                    print('
                    <p class = "text-dark mr-auto">Logged in as '.$_SESSION['email'].'.</p>
                    <a class = "nav-item nav-link text-dark" href="structure/logout.php">Click here to log out.</a>
                    ');
                } else {
                    print('
                    <form action="./../index.php" method="post">
                        <label for="username">Username:</label><br>
                                <input type="text" id="username" name="username"><br>
                        <label for="password">Password:</label><br>
                                <input type="password" id="password" name="password"><br><br>
                        <input type="submit" value="Log in">
                        <input type="reset">
                    </form> '
                    );
                }
                print ('
                </a>
            </div>
        </div>
    </div>
</div> -->
