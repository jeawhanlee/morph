<?php
class welcome extends fh_ctrl{   
    public function index(){
        global $data;
        
        $data['title'] = $this->title('Bot Morpheus');
        
        // unset tmp_name
        $this->remove_sess('tmp_name');
        $this->remove_sess('user_name');
        
        $data['bot_intro'] = array(
            "Hey, what's up, i'm Morph, the smartest Vocab Bot that you will ever know.",
            "Hello there, I am Morph your vocab expert, you can ask me the meaning of any word as long as it does exists, i'll be sure to get you the meaning."
        );
        
        shuffle($data['bot_intro']);
        
        //$data['']
    }
}