<br><br><br><br>
<h1>How can ICT help improve your productivity?</h1>
<br>
<h1>(ICT training or tutorial you require.)</h1>
<br><br>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('id',array('type' => 'hidden'));
echo $this->Form->input('name');
echo $this->Form->input('comment');
echo $this->Form->end('Send');
?>