<?php
/*
 * Author 	: Dileep G
 * Email	: dileepgm@gmail.com
 * File   	: Footer.php
 * Created on :  02-Jul-2012
 * Description : TODO
 *
 */
class Footer extends CWidget
{
    public function init()
    {
        // this method is called by CController::beginWidget()
    }
 
    public function run()
    {
        $this->renderFile(dirname(__FILE__)  . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR .'Footer.php', array(
          
        ));
    }
}
