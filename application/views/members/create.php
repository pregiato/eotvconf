<nav id="site-nav-remain" class="navbar navbar-fixed-top navbar-custom navbar-solid">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">

                        <!-- logo image  -->
                        <img src="/assets/images/logo.png" alt="Logo">

                        V. Eötvözet Konferencia 2016
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li><a href="<?php echo base_url(); ?>#about">A konferenciáról</a></li>
                    <li><a href="<?php echo base_url(); ?>#colls">A két Kollégium</a></li>
                    <li class="active"><a href="#">Regisztráció</a></li>
                    <li><a href="<?php echo base_url(); ?>#schedule">Menetrend</a></li>
                    <li><a href="<?php echo base_url(); ?>#contact">Kapcsolat</a></li>
                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                    <li><a  href="<?php echo base_url(); ?>#faq">FAQ</a></li>
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

<section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Regisztráció</h3>
                </div>
            </div>
            <div>
                <h4>Szekció</h4>
                <p>Az előadások időtartama 10-15 perc, vitára minden előadás után 5 percet szánunk. Jelentkezéskor kérjük, mindenki adjon meg egy munkacímet, amellyel tágabban megnevezi a feldolgozni kívánt témát. Ez a jelentkezés véglegesítéséig (az absztrakt leadásáig) természetesen változhat, a szekciók pontos beosztása miatt azonban fontos ezt tudnunk. Ezen felül – a szakmai lektorok minél pontosabb kiválasztásának érdekében – szeretnénk minden résztvevőt megkérni a jelentkezéskor egy rövid témaleírás leadására is, amely nem azonos az absztrakttal és nem fog semmilyen hivatalos fórumra kikerülni.</p>
            </div>

            <?php echo validation_errors(); ?>
			<?php echo form_open('members/create'); ?>
                <section> <!--Személys adatok-->
                <h4>Személyes információk</h4>
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Név" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <put type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                        </div>
                        <fieldset>
                            <div class="some-class">
                                <label>Szállást kérek: </label>
                                <input type="radio" class="radio" name="accomodation" value="igen" id="acc_yes" />
                                <label for="accomodation">Igen</label>
                                <input type="radio" class="radio" name="accomodation" value="nem" id="acc_no" />
                                <label for="accomodation">Nem</label>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Egyetem, kar, szak" id="university" name="university" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefon" id="phone" name="phone" required>
                        </div>
                   </div>
                </div>
               </section>
               <section> <!--Munkáim-->
               <h4>A munkámról</h4>
                   <div class="row">
                       <div class="col-sm-6">
                           <div class="form-group">
                             <input type="text" class="form-control" placeholder="Munka cím (végleges)" id="work_title" name="work_title" required>
                            </div>
                       </div>
                       <div class="col-sm-6">
                            <fieldset>
                                <div class="some-class">
                                    <label>Publikálok: </label>
                                    <input type="radio" class="radio" name="publication" value="igen" id="pub_no" />
                                    <label for="publication">Igen</label>
                                    <input type="radio" class="radio" name="publication" value="nem" id="pub_no" />
                                    <label for="publication">Nem</label>
                                </div>
                            </fieldset>
                       </div>
                       <div class="col-sm-12">
                           <input class="form-control" id="summary" name="summary" type="text" rows="4" cols="50" placeholder="Néhány mondatos összefoglaló" required></input>
                       </div>
                       <div class="form-group">
                            <label for="inputfile">Fájlfeltölt</label>
                            <input type="file" id="inputfile" name="inputfile">
	                    <div class="form-group">
		                    <label for="inputfile">Fájlfeltölt</label>
		                    <input type="file" id="inputfile" name="inputfile">
		                    <? if(isset($upload_data)):?><p class="help-block"><?=$upload_data;?></p><? endif;?>                            
	                    </div>
                        </div>
                   </div>
               </section>
               <section> <!--Témavezető-->
               <h4>A témavezetőről</h4>
               <div class="row">
                   <div class="col-sm-6">
                       <div class="form-group">
                            <input type="text" class="form-control" placeholder="A témavezető neve" id="leader_name" name="leader_name" required>
                        </div>
                   </div>
                   <div class="col-sm-6">
                       <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="leader_email" name="leader_email" required>
                        </div>
                   </div>
               </section>
                 
                 <div class="text-center mt20">
                    <input type="submit" name="submit" class="btn btn-black" id="registration-submit-btn" value="Regisztráció" />
                </div>

            </form>
        </div>
    </section>
