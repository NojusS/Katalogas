<footer>
    <div class="fab-container" style="position:fixed; bottom:50px; right:50px; cursor:pointer;">
        <div class="button iconbutton" style="width:50px; height:50px; border-radius:100%; background: #9e503c; box-shadow: 10px 10px 5px #aaaaaa">
            <a href="./contact.php">
                <i style="display:flex; align-items:center; justify-content:center; height:100%; color: #fff;" class="fa-solid fa-comments"></i>
            </a>
        </div>
    </div>

    <section id="sectionBottom1" class="section sectionBottom1 visible-lg-block visible-md-block visible-sm-block visible-xs-block">
        <div class="container">
            <div class="row">
                <div class="visible-lg-block visible-md-block visible-sm-block visible-xs-block col-lg-12 col-lg-reset col-md-12 col-md-reset col-sm-12 col-sm-reset col-xs-12 col-xs-reset">
                    <div class="moduleTable">
                        <h3>Gaukite naujausius pasiūlymus</h3>
                        <div class="line"></div>
                        <div class="mail" id="mailing">
                            <div class="mail_fulldiv" style="text-align: center;">
                                <form action="/" id="formMail" onsubmit="return submitForm('optin','formMailing')" method="post" name="subForm">
                                    <div class="mailing_module_form">
                                        <div class="mailing_form">
                                            <div class="acyFlex">
                                                <p class="onefield fieldacymail" id="field_email">
                                                    <span class="acyfield_email">
                                                        <input type="text" class="inputbox" id="user_email" onfocus="if(this.value == 'Įveskite savo el.paštą') this.value = ';"  name="user[email]" style="width: 80%;" placeholder="Įveskite savo el.paštą" title="Įveskite svo el.paštą">
                                                    </span>
                                                </p>
                                                <p class="acysubbuttons">
                                                    <input style="width:auto; background: #0d6efd;" type="submit" class="button subbutton btn btn-primary" value="Užsakyti" name="submit" onclick="try{return submitacymailingform('optin','formMailing');}catch(err){alert('The form could not be submitted'+err);return false;}">
                                                </p>
                                            </div>
                                            <p class="onefield  fieldacyterms">
                                                <label for="mailingdata_terms">
                                                    <input type="checkbox" id="mailingdata_terms" class="checkbox" name="terms" title="Sąlygos ir taisyklės">
                                                     Aš sutinku su Jūsų 
                                                    <a href="#" id="85:naudojimo-taisykles">Sąlygos ir taisyklės</a>
                                                     ir 
                                                    <a href="#" id="85:naudojimo-taisykles">Privatumo politika</a>
                                                </label>
                                            </p>
                                        </div>
                                        <div class="acymailing_finaltext">Prenumeruokite naujienlaiškį ir gaukite naujienas apie akcijas.</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionBottom2 visible-lg-block visible-md-block visible-sm-block visible-xs-block" id="sectionBottom2">
        <div class="container">
            <div class="row">
                <div class="visible-lg-block visible-md-block visible-sm-block visible-xs-block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                    <div class="moduletable">
                        <div class="custom">
                            <img src="./images/logotipas.png" alt="Inmondus logotipas">
                            <br>
                            <a href="/">
                                Baldų salonas Kaune
                                <i class="fa-solid fa-info" style="font-size: 14;"></i>
                            </a>
                            <br>
                            <a href="#">
                                Baldų salonas Ukmergėje
                                <i class="fa-solid fa-info" style="font-size: 14;"></i>
                            </a>
                            <br>
                            <a href="tel:+3706264745">+370 6264745</a>&nbsp; I-V: 09:30-17 val.
                            <br>
                            El.paštas:
                            <a href="mailto:el.parduotuve@inmondus.lt">el.parduotuve@nojausbaldai.lt</a>
                        </div>
                    </div>
                </div>
                <div class="visible-lg-block visible-md-block visible-sm-block visible-xs-block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                    <div class="moduletable">
                        <h3>Informacija</h3>
                        <ul class=" menu mod-list">
                            <li class="item">
                                <a href="#">Apmokėjimas</a>
                            </li>
                            <li class="item">
                                <a href="#">Pristatymas</a>
                            </li>
                            <li class="item">
                                <a href="#">Garantijos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="visible-lg-block visible-md-block visible-sm-block visible-xs-block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                    <div class="moduletable">
                        <h3>Instrukcijos</h3>
                        <ul class="nav menu mod-list">
                            <li class="item">
                                <a href="#">Baldų naudojimo instrukcija</a>
                            </li>
                            <li class="item">
                                <a href="#">Apsipirkimo instrukcija</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="visible-lg-block visible-md-block visible-sm-block visible-xs-block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                    <div class="moduletable">
                        <h3>inmondus</h3>
                        <ul class="nav menu mod-list">
                            <li class="item">
                                <a href="#">Apie mus</a>
                            </li>
                            <li class="item">
                                <a href="#">Paslaugos</a>
                            </li>
                            <li class="item">
                                <a href="#">Kontaktai</a>
                            </li>
                            <li class="item">
                                <a href="./login_form.php">Admin Prisijungimas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-reset col-md-12 col-md-reset col-sm-12 col-sm-reset col-xs-12 col-xs-reset">
                    <div class="moduletable">
                        <div class="custom">
                            <div style="text-align: center">
                                <span style="font-size: 12px;">
                                    © 2022 Nojaus Baldai.
                                    <a href="#">Naudojimosi taisyklės</a>
                                    ir
                                    <a href="#">Privatumo politika</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
