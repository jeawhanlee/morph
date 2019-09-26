<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <h3>Morph the Bot</h3>
            <p>Ask me any word in the dictionary and i'll tell you the meaning</p>
            
            <div class="chat-area">
                <div class="chat-display">
                    <?php if(empty(call_sess('user_name'))): ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bub">
                                 <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="bot-avatar">Morph</div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"></div>
                                </div>
                                <?php print $bot_intro[0] ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bub">
                                 <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="bot-avatar">Morph</div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"></div>
                                </div>
                                Ok, I think that's enough intro, now you know my name, can I get yours, type in your name in the textbox below.
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                        </div>
                    <?php endif ?>
                </div>
                
                <div class="text-area">
                    <form id="msg_form">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 unset-padding">
                                <input type="text" placeholder="Type a text..." class="form-control" name="text_input" id="text_input" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 unset-padding">
                                <button type="submit" class="btn btn-warning btn-block">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</div>