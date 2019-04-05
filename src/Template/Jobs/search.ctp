<div>
	<?php foreach($jobs as $oneJob): ?>
		<?php 
			echo '<tr>';
                    echo '<td>';

                    echo '<a  class=" btn-lg" data-toggle="modal" data-target="#';                    
                    echo $oneJob['ID'];
                    echo'">'; 
                    echo $oneJob['Jobtitel'];
                    echo '</a>';
                    // require_once 'buildModal.php';
                    // displayModal($oneJob);
                    echo '<div class="modal fade" id="';
    echo $oneJob['ID'];
    echo '" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <br>
                                <h3 class="modal-title">'; 
    echo $oneJob["Jobtitel"];
    echo'</h3>
                            </div>
                            <div class="modal-body">
                                <h4>Wer sind wir:</h4>
                                <p>'; 
    echo $oneJob["Firmenbeschreibung"];
    echo'</p>
                                <br>
                                <h4>Aufgaben:</h4>
                                <p>';
    echo $oneJob["Aufgaben"];
    echo '</p>
                                <br>
                                <h4>Profil:</h4>
                                <p>'; 
    echo $oneJob["Profil"];
    echo '</p>
                                <br>
                                <h4>Bewerbungsfrist:</h4>
                                <p>'; 
    echo $oneJob["Frist"];
    echo '</p>
                            </div>
                            <div class="modal-footer">';
            echo $this->Form->create($oneJob, ['action' => 'bewerben']).'<input type="submit" class="btn btn-warning" value="Sich bewerben"/><input type="hidden" name="jobTitel" value="';
    echo $oneJob["Jobtitel"];
    echo '"/>
        
        <input type="hidden" name="ID" value="';
    echo $oneJob["ID"];
    echo '"/>';
        
            echo $this->Form->end();
            echo '
                            </div>
                        </div>
                    </div>
                </div>';



                    echo '</td>';
                    echo '<td>';
                    echo $oneJob['Firma'];
                    echo '</td>';
                    echo '<td>';
                    echo $oneJob['Region'];
                    echo '</td>';
                    echo '<td>';
                    echo $oneJob['Stadt'];
                    echo '</td>';

                    echo '</tr>';

		?>
	<?php endforeach; ?>
</div>