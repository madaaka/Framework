
<?= $this->Form->create(null, ['action' => 'bewerben', 'type' => 'file'], ['style' => 'padding: 20px']) ?>
	
	<input name="doc" type="file" placeholder="Upload">
	<button type="submit" class="btn">Send</button>
<?= $this->Form->end() ?>