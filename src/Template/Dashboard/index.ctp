
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                    <div class="demo-card-event mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand blue-card-color">
                            <h4>
                                Architecture SI<br> 24 mai 2017<br> 8h30 - 11h30
                            </h4>
                            <div class="last-note-header live-color"> LIVE</div>
                        </div>
                        <div class="mdl-card__actions mdl-card--border blue-card-color">
                            <a class="button-link mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="view_session.html">
                                Rejoindre la session
                            </a>
                            <div class="mdl-layout-spacer "></div>
                            <i class="material-icons">cast_connected</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet">
                    <div class="bottomleft-card-square mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand green-card-color">
                            <div class="demo-card-img"><i class="material-icons-dashboard">account_box</i></div>
                            <h2 class="mdl-card__title-text">Bonjour, Yann</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Accéder à la gestion complète de vos données personnelles.
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <?= $this->Html->link(__('View'), ['controller' => 'users','action' => 'view', $this->request->session()->read('Auth.User.id')]) ?>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet">
                    <div class="bottom-card-square mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand red-card-color">
                            <div class="demo-card-img"><i class="material-icons-dashboard">assessment</i></div>
                            <h2 class="mdl-card__title-text">Resultats</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Accéder aux notes et aux détails de vos résultats de sessions.
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a href="/results" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Voir mes résultats
                                </a>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet">
                    <div class="bottomright-card-square mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand yellow-card-color">
                            <div class="demo-card-img"><i class="material-icons-dashboard">visibility</i></div>
                            <h2 class="mdl-card__title-text">Sessions</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Accéder à la gestion de vos sessions : ajouts, modifications ou suppressions.
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a href="/sessions/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Voir les sessions
                                </a>
                        </div>
                    </div>
                </div>
            </div>
       