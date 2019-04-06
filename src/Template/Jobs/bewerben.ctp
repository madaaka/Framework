<?= $this->element('nav') ?>
<!--?= $this->Html->css('about/bootstrap.min.css') ?-->
<?= $this->Form->create(null, ['action' => 'bewerben', 'type' => 'file'], ['style' => 'padding: 20px']) ?>

<div class="container mx-auto mt-5" style="margin-top:50px">	
    <div class="container col-xs-4">

        <div class="form-group">
            <label for="anrede">Anrede</label>
            <select id="anrede" class="form-control">
                <option value="frau">Frau</option>
                <option value="herr">Herr</option>
                <option value="divers">Divers</option>

            </select>
        </div>

        <div class="form-group">
            <label for="vorname">Vorname</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="vorname" aria-describedby="vornameHelp" placeholder="Vorname">  
            </div>
            <small id="vornameHelp" class="form-text text-muted">Geben Sie Ihren Vornamen ein.</small>
        </div>

        <div class="form-group">
            <label for="nachname">Nachname</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="nachname" aria-describedby="nachnameHelp" placeholder="Nachname">
            </div>
            <small id="nachnameHelp" class="form-text text-muted">Geben Sie Ihren Nachnamen ein.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <small id="emailHelp" class="form-text text-muted">Wir geben Ihre E-Mail Adresse nicht weiter.</small>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" class="form-control" id="adresse" aria-describedby="adresseHelp" placeholder="Adresse">
            </div>
            <small id="adresseHelp" class="form-text text-muted">Geben Sie eine Vollständige Adresse ein.</small>
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>


        <button type="submit" class="btn px-3 btn-primary">Send</button>
    </div>
</div>
<?= $this->Form->end() ?>