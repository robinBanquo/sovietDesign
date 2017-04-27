

                <div class="footer-container"><div class="mentions">


                    <a href="#">mentions legales</a><br />
                                <a href="#">Foire Aux Questions</a><br />
                                      <a href="#">Conditions générales</a><br />
                                          <a href="#">contact</a><br />

                        </div>


                        <div class="login">
                            <?php if (isset ($_SESSION['admin'])){ ?>

                    <a href="#">se deconnecter</a></br>
                <?php }
                else{ ?>
                    <a href="#">accés administrateur</a>
                    <?php } ?>
                  </div>

              </div>
