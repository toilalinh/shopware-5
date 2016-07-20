<ul id="topMenu">
    {if $isLogged}
        <li>
            <div id="personalsetting" style="background-color: white;">
                <p>Mein Konto</p>
                <div>
                    <p><a style="color:black;" href="#">Change password</a></p>
                    <p><a style="color:black;" href="#">Bestellhistorie</a></p>
                </div>
            </div>
        </li>
        <li style="color:white;">Hallo, Linh Tran</li>
        <li><a href="{url controller='account' action='logout'}"> Logout</a></li>
    {else}
        <li class="login flyout">

            <a href="#" id="loginBoxOpener" title="Login">Login</a>
            <form id="loginForm" name="loginForm" action="{url controller='personal' action='login'}?XDEBUG_SESSION_START=TEST1" method="post">
                <div id="loginBox" class="loginBox">
                    <div class="loginForm corners">
                        <h4>Login</h4>
                        <p>
                            <input name="email" type="text" value="moneymoney3110@gmail.com" id="email" class="textbox" />
                        </p>
                        <p>
                            <input name="password" type="password" id="password" class="textbox passwordbox" value="anhlinhmoney" /><strong><a id="forgotPasswordOpener" href="#" title="Passwort vergessen?">?</a></strong>
                        </p>

                        <p>
                            <input type="submit" name="Submit" id="" class="submitButton lbutton-small" value="Log in" />
                        </p>
                    </div>
                </div>
            </form>
        </li>
    {/if}
</ul>