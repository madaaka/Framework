 <nav class="navbar navbar-default navbar-fixed-top mb-5">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                	<?= $this->Html->link('EINLOGGEN', ['controller' => 'Benutzer', 'action' => 'login', '_full' => true]);?>
                </li>
                <li>
                	<?= $this->Html->link('REGISTRIEREN', ['controller' => 'Benutzer', 'action' => 'add', '_full' => true]);?>
                </li>
                <li>
                    <?= $this->Html->link(__('ÜBER UNS'), ['controller' => 'Benutzer', 'action' => 'about']) ?>
                </li>
                <li class="nav-item dropdown">
    				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    					SPRACHEN <i class="fas fa-ellipsis-v"></i>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Deuscth</a>
						<a class="dropdown-item" href="#">Englisch</a>
						<a class="dropdown-item" href="#">Französisch</a>
					</div>
                </li>
            </ul>

        </div>
    </div>
</nav> 