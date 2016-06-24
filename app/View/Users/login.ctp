<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Form->create('User',array('role'=>'form')); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="data[User][username]" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="data[User][password]" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->

                                <?php
                                	$options = array(
                                		'type'=>'button',
                                		'class'=>'btn btn-lg btn-success btn-block',
                                		'div'=>false,
                                		'label'=>false);
                                ?>
                                <?= $this->Form->input("Submit",$options);?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="users form">
