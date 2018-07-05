<?php
$f = $this->db->query("select * from webhooks");
$g = $f->result_array();

?>
<div class="main-box">
	<div class="main-menu row">
	<div id="pagecontent_inner_full">
                        <div>
    <div class="col s12 m3">
        <div class="p20">
            <h2>Saved WebHooks</h2>
        </div>
        <div style="padding-bottom:20px;"></div>                    <ul class="settlistthin">

<?php foreach ($g as $key => $gg) { ?>
                <li><a href="<?= base_url(); ?>Webhooks/edt_Webhooks/<?php echo $gg['id']; ?>"><?php echo $gg['title']; ?></a></li>
            <?php } ?>
            </ul>
                <div style="padding-bottom:20px;"></div>        <div class="p20">
            <a href="index.php?module=administration&amp;page=triggerposts">Setup WebHook Triggers</a>
        </div>
    </div>
    <div class="col s12 m6">

<h2>Create A WebHook</h2>
<form id="webhookfrm">
<div class="input-field col s12 m12">
          <input placeholder="Webhook Title*" name="title"  type="text" value="<?= $w['title']; ?>" class="validate">
          <label for="first_name">Webhook Title*</label>
        </div>

        <div class="input-field col s12 m4">
          <input placeholder="WebHook URL*" name="url"  value="<?= $w['url']; ?>" type="text" class="validate">
          <label for="first_name">WebHook URL*</label>
        </div>


        <div class="input-field col s12 m4">
          <input placeholder="Port" name="port" type="text" class="validate" value="<?= $w['port']; ?>">
          <label for="first_name">Port</label>
        </div>


        <div class="input-field col s12 m4">
         <select id="method" name="method" class="" style="display: none;">
<option value="<?= $w['method']; ?>"><?= $w['method']; ?></option><option value="POST">POST</option>
<option value="GET">GET</option>

</select>
       
        </div>

        <h2>Authentication</h2>

          <div class="input-field col s12 m4">
          <input placeholder="Username" value="<?= $w['username']; ?>" name="username" type="text" class="validate">
          <label for="first_name">Username</label>
        </div>


        <div class="input-field col s12 m4">
          <input placeholder="Password" name="password" type="text" value="<?= $w['password']; ?>" class="validate">
          <label for="first_name">Password</label>
        </div>


        <div class="input-field col s12 m4">
        <select id="auth_type" name="type" class="w100" style="display: none;">
<option value="<?= $w['type']; ?>"><?= $w['type']; ?></option><option value="basic">Basic</option>
<option value="digest">Digest</option>

</select>
       
        </div>

        <div class="btnsec">
        	<a href="#!" class="delete red-text">delete webhook</a>
        	<a href="#!" class="btn <?php if($w['id']==""){ ?> addwebb <?php }else{ ?>edtwebb <?php } ?> green">save webhook</a>
        </div>

</form>

   </div>

    
</div>
