<div class="inbox">
    <div class="row">
        <div class="col-md-3">
            <div class="inbox-sidebar">
                <a href="javascript:;" data-title="Compose" class="btn red compose-btn btn-block">
                    <i class="fa fa-edit"></i> List IP 
                </a>
                <ul class="inbox-contacts">
                    <?php foreach ($all_messages as $msg): ?>
                        <li>
                            <a href="javascript:;">
                                <img class="contact-pic" src="assets/img/guest.png">
                                <span class="contact-name">
                                    <?php echo $msg['IP']; ?>
                                </span>
                                <?php if ($msg['new_msg'] != '0'): ?>
                                    <span class="badge label-danger"><?php echo $msg['new_msg']; ?></span></a>
                                <?php endif ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="inbox-body">
                <div class="inbox-content">
                    <div class="chat-box">
                        <div class="chat-box-body">
                            <div class="chat-box-overlay">   
                            </div>
                            <div class="chat-logs">
                           
                            </div><!--chat-log -->
                        </div>
                        <div class="chat-input">      
                            <form>
                                <input type="text" id="chat-input" placeholder="Send a message..."/>
                                <button type="submit" class="chat-submit" id="chat-submit"><i class="fa fa-send-o"></i></button>
                            </form>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
