<?php
class SwitchRouter {
    public function route($uri) {    
        // using a simple switch statement to route URL's to controller methods
        switch($uri) {


            default:
                http_response_code(404);
                break;
        }
    }
}
?>