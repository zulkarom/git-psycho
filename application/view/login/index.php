<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div>
        <div style="margin: 0 auto; width:90%">

            <!-- login box on left side -->
            <div>
			
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" align="center">
				
				<img src="<?php echo Config::get('URL'); ?>images/umk.jpg" />
				
				<h3>TEMUDUGA ATAS TALIAN <br />
				IJAZAH SARJANA MUDA KEUSAHAWANAN (2u2i)<br />
				FAKULTI KEUSAHAWANAN DAN PERNIAGAAN</h3>
				
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				
				<?php 
				
				if($this->open == 1){
				?>
				
                <form action="<?php echo Config::get('URL'); ?>login/login" method="post">
				<br />
				
				<div class="form-group">
				<label for="user_name">NO KAD PENGENALAN:</label>
				<br /><i>(tanpa "-")</i>
				<input type="text" name="user_name" placeholder="NO KAD PENGENALAN" class="form-control" required />
				</div>
                    <?php if (!empty($this->redirect)) { ?>
                        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                    <?php } ?>
					<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                    <input type="submit" class="btn btn-primary" value="LOG MASUK"/>
                </form>
				
				<?php } else { 
				
				echo '<h4>TUTUP</h4>';
				}
				?>
				</div>
				<div class="col-md-1"></div>
				</div>
				
				</div>
				<div class="col-md-1"></div>
			</div>
				
                

            </div>



        </div>
    </div>
</div>
