<?php class Footer {
    private $dir;
    private $root;
    private $routes = [];
    public $footer;

    function __construct($directory) {
        $this->dir = $directory;
        $this->root = realpath(dirname(__FILE__) . '/../..');
        $this->setRoutes();
        echo $this->footer;
    }

    private function setRoutes() {
        if ($this->dir === 'home') {
            $this->routes['home'] = '#';
            $this->routes['wohnung28'] = '../projects/wohnung28';
            $this->routes['about'] = '../about';
            $this->routes['contact'] = '../contact';
            $this->routes['impressum'] = '../impressum';
            $this->routes['privacy'] = '../privacy';
            $this->routes['agb'] = '../agb';
        } elseif ($this->dir === 'wohnung28') {
            $this->routes['home'] = '../../home';
            $this->routes['wohnung28'] = '#';
            $this->routes['about'] = '../../about';
            $this->routes['contact'] = '../../contact';
            $this->routes['impressum'] = '../../impressum';
            $this->routes['privacy'] = '../../privacy';
            $this->routes['agb'] = '../../agb';
        } elseif ($this->dir === 'about') {
            $this->routes['home'] = '../home';
            $this->routes['wohnung28'] = '../projects/wohnung28';
            $this->routes['about'] = '#';
            $this->routes['contact'] = '../contact';
            $this->routes['impressum'] = '../impressum';
            $this->routes['privacy'] = '../privacy';
            $this->routes['agb'] = '../agb';
        } elseif ($this->dir === 'contact') {
            $this->routes['home'] = '../home';
            $this->routes['wohnung28'] = '../projects/wohnung28';
            $this->routes['about'] = '../about';
            $this->routes['contact'] = '#';
            $this->routes['impressum'] = '../impressum';
            $this->routes['privacy'] = '../privacy';
            $this->routes['agb'] = '../agb';
        } elseif ($this->dir === 'impressum') {
            $this->routes['home'] = '../home';
            $this->routes['wohnung28'] = '../projects/wohnung28';
            $this->routes['about'] = '../about';
            $this->routes['contact'] = '../contact';
            $this->routes['impressum'] = '#';
            $this->routes['privacy'] = '../privacy';
            $this->routes['agb'] = '../agb';
        } elseif ($this->dir === 'privacy') {
            $this->routes['home'] = '../home';
            $this->routes['wohnung28'] = '../projects/wohnung28';
            $this->routes['about'] = '../about';
            $this->routes['contact'] = '../contact';
            $this->routes['impressum'] = '../impressum';
            $this->routes['privacy'] = '#';
            $this->routes['agb'] = '../agb';
        }

        $this->footer = '<footer class="pt-4 pb-4 mt-5 pt-md-5 border-top mb-0 container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5>Immobilien Von Rehetobel AG</h5>
                                    <ul class="list-unstyled">
                                        <li>Hauptstrasse 52</li>
                                        <li>8264 Eschenz</li>
                                        <li class="mt-2"><a href="tel:0041765550015" class="cs-footer-link">+41 76 555 00 15</a></li>
                                        <li class="mt-2"><a href="mailto:info@ivrag.ch" class="cs-footer-link">info@ivrag.ch</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Navigation</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="' . $this->routes['home'] . '" class="cs-footer-link">Home</a></li>
                                        <li>
                                            <a href="#" class="cs-footer-link" role="button" id="ivrag-projects-footer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projekte</a>
                                            <div class="dropdown-menu" aria-labelledby="ivrag-projects-footer">
                                                <a class="dropdown-item cs-footer-link" href="' . $this->routes['wohnung28'] . '"><small>Wohnung 28</small></a>
                                            </div>
                                        </li>
                                        <li><a href="' . $this->routes['about'] . '" class="cs-footer-link">Über uns</a></li>
                                        <li><a href="' . $this->routes['contact'] . '" class="cs-footer-link">Kontakt</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Richtlinien</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="' . $this->routes['impressum'] . '" class="cs-footer-link">Impressum</a></li>
                                        <li><a href="' . $this->routes['privacy'] . '" class="cs-footer-link">Datenschutz</a></li>
                                    </ul>
                                </div>
                            </div>
                        </footer>';
    }
}