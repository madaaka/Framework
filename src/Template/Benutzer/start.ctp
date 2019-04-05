<?= $this->element('nav') ?>
        <div class="jumbotron text-center intro">
            <a class="im_start" href="#myPage">
                <?= $this->Html->image('web_hi_res_512.png', ['alt' => 'Kamer Jobs Logo', 'height' => '320', 'width' => '320', 'class' => 'im_start']); ?>
            </a>

            <!--h1>Kamer Jobs</h1--> 
            <h2 id="sous_titre">Jobs for all</h2> 
            <!--form>
                <div class="input-group">
                    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Subscribe</button>
                    </div>
                </div>
            </form-->
        </div>


        <div class="container text-center">

            <?= $this->Form->create(null, ['type' => 'get', 'url' => ['controller' => 'jobs', 'action' => 'search']]) ?>
                <input type="text" placeholder="Was suchen Sie?" name="stichwort"/>
                <input type="text" placeholder="Wo?" name="ort"/>
                <input type="submit" value="Suchen"/>
            <?= $this->Form->end() ?>
        </div>
